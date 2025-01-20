// src/supabase.js
import { createClient } from '@supabase/supabase-js';

const SUPABASE_URL = 'https://wjoeqnorppuunebmqvmo.supabase.co';
const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Indqb2Vxbm9ycHB1dW5lYm1xdm1vIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzczNjMzOTEsImV4cCI6MjA1MjkzOTM5MX0.eWZUIfwIQ-O7k4gY0TQkVa5RbCxPkpJkOWcHkRlg2kI';

const supabase = createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

export default supabase;
