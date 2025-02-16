// User Login
function login() {
    const username = document.getElementById('loginUsername').value;
    const password = document.getElementById('loginPassword').value;
  
    if (username && password) {
      alert('User logged in successfully!');
      document.getElementById('authStatus').innerText = `Logged in as ${username}`;
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('dashboard').style.display = 'block';
      document.getElementById('loggedInUser').innerText = username;
    } else {
      alert('Invalid credentials!');
    }
  }
  
  // Admin Login
  function adminLogin() {
    const adminUsername = document.getElementById('adminUsername').value;
    const adminPassword = document.getElementById('adminPassword').value;
  
    if (adminUsername === 'admin' && adminPassword === 'admin123') {
      alert('Admin logged in successfully!');
      document.getElementById('adminLoginForm').style.display = 'none';
      document.getElementById('adminDashboard').style.display = 'block';
      document.getElementById('adminUser').innerText = 'Admin';
    } else {
      alert('Unauthorized admin login attempt!');
      logSecurityIssue(adminUsername);
    }
  }
  
  // Log Security Issues
  function logSecurityIssue(user) {
    const logList = document.getElementById('securityLog');
    const logEntry = document.createElement('li');
    logEntry.innerText = `Failed login attempt by ${user} at ${new Date().toLocaleString()}`;
    logList.appendChild(logEntry);
  }
  