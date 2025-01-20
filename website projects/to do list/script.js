// Import the createClient function from the Supabase library
import { createClient } from '@supabase/supabase-js';

// Supabase setup
const SUPABASE_URL = 'https://wjoeqnorppuunebmqvmo.supabase.co';
const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Indqb2Vxbm9ycHB1dW5lYm1xdm1vIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzczNjMzOTEsImV4cCI6MjA1MjkzOTM5MX0.eWZUIfwIQ-O7k4gY0TQkVa5RbCxPkpJkOWcHkRlg2kI';
const supabase = createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

// DOM Elements
const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');
const completedTaskList = document.getElementById('completedTaskList');

// Add Task
async function addTask(description) {
    const { data, error } = await supabase
        .from('tasks')
        .insert([{ description, completed: false }]);
    if (error) {
        console.error('Error adding task:', error);
    } else {
        console.log('Task added:', data);
        renderTasks();
    }
}

// Fetch All Tasks
async function fetchTasks(completed = null) {
    const query = supabase.from('tasks').select('*');
    if (completed !== null) query.eq('completed', completed);
    const { data, error } = await query;
    if (error) {
        console.error('Error fetching tasks:', error);
        return [];
    }
    return data;
}

// Mark Task Completed
async function markTaskCompleted(id, completed) {
    const { error } = await supabase
        .from('tasks')
        .update({ completed })
        .eq('id', id);
    if (error) {
        console.error('Error updating task:', error);
    } else {
        renderTasks();
    }
}

// Delete Task
async function deleteTask(id) {
    const { error } = await supabase.from('tasks').delete().eq('id', id);
    if (error) {
        console.error('Error deleting task:', error);
    } else {
        renderTasks();
    }
}

// Render Tasks
async function renderTasks() {
    // Fetch and display all tasks
    const allTasks = await fetchTasks();
    taskList.innerHTML = '';
    allTasks.forEach((task) => {
        const li = document.createElement('li');
        li.textContent = task.description;

        const toggleBtn = document.createElement('button');
        toggleBtn.textContent = task.completed ? 'Undo' : 'Complete';
        toggleBtn.className = 'complete';
        toggleBtn.onclick = () => markTaskCompleted(task.id, !task.completed);

        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.className = 'delete';
        deleteBtn.onclick = () => deleteTask(task.id);

        li.appendChild(toggleBtn);
        li.appendChild(deleteBtn);
        taskList.appendChild(li);
    });

    // Fetch and display completed tasks
    const completedTasks = await fetchTasks(true);
    completedTaskList.innerHTML = '';
    completedTasks.forEach((task) => {
        const li = document.createElement('li');
        li.textContent = task.description;

        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.className = 'delete';
        deleteBtn.onclick = () => deleteTask(task.id);

        li.appendChild(deleteBtn);
        completedTaskList.appendChild(li);
    });
}

// Event Listeners
addTaskBtn.addEventListener('click', () => {
    const description = taskInput.value.trim();
    if (description) {
        addTask(description);
        taskInput.value = '';
    }
});

// Initial render
renderTasks();
