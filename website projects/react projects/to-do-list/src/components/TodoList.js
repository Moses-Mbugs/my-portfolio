// src/components/TodoList.js
import React, { useState, useEffect } from 'react';
import supabase from '../supabase';

function TodoList() {
  const [tasks, setTasks] = useState([]);
  const [newTask, setNewTask] = useState('');

  // Fetch tasks from Supabase
  useEffect(() => {
    async function fetchTasks() {
      const { data, error } = await supabase.from('tasks').select('*');
      if (error) {
        console.error('Error fetching tasks:', error);
      } else {
        setTasks(data);
      }
    }
    fetchTasks();
  }, []);

  // Add task
  async function addTask() {
    if (newTask.trim()) {
      const { data, error } = await supabase
        .from('tasks')
        .insert([{ description: newTask, completed: false }])
        .select('*'); // Ensure the inserted rows are returned
      if (error) {
        console.error('Error adding task:', error.message);
      } else if (data && Array.isArray(data)) {
        setTasks([...tasks, ...data]);
        setNewTask('');
      }
    }
  }
  

  // Toggle task completion
  async function toggleTaskCompletion(id, completed) {
    const { error } = await supabase
      .from('tasks')
      .update({ completed })
      .eq('id', id);
    if (error) {
      console.error('Error updating task:', error);
    } else {
      setTasks(tasks.map((task) =>
        task.id === id ? { ...task, completed } : task
      ));
    }
  }

  // Delete task
  async function deleteTask(id) {
    const { error } = await supabase.from('tasks').delete().eq('id', id);
    if (error) {
      console.error('Error deleting task:', error);
    } else {
      setTasks(tasks.filter((task) => task.id !== id));
    }
  }

  return (
    <div className="todo-list">
      <div className="cards-container">
        {/* Card for adding tasks */}
        <div className="card" id="addTaskCard">
          <h2>Add a To-Do</h2>
          <input
            type="text"
            value={newTask}
            onChange={(e) => setNewTask(e.target.value)}
            placeholder="Enter your task here..."
          />
          <button onClick={addTask}>Add Task</button>
        </div>
  
        {/* Card for all tasks */}
        <div className="card" id="allTasksCard">
          <h2>All Tasks</h2>
          <ul id="taskList">
            {tasks.filter((task) => !task.completed).map((task) => (
              <li key={task.id}>
                {task.description}
                <button class ="complete" onClick={() => toggleTaskCompletion(task.id, true)}>
                  Complete
                </button>
                <button class ="delete" onClick={() => deleteTask(task.id)}>Delete</button>
              </li>
            ))}
          </ul>
        </div>
  
        {/* Card for completed tasks */}
        <div className="card" id="completedTasksCard">
          <h2>Completed Tasks</h2>
          <ul id="completedTaskList">
            {tasks.filter((task) => task.completed).map((task) => (
              <li key={task.id}>
                {task.description}
                <button class ="complete" onClick={() => toggleTaskCompletion(task.id, false)}>
                  Undo
                </button>
                <button class ="delete" onClick={() => deleteTask(task.id)}>Delete</button>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </div>
  );
  
}

export default TodoList;
