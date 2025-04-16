<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookstore Admin Panel</title>
  <style>
    /* Basic styling for the layout */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .navbar {
      background-color: #333;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .container {
      display: flex;
      margin: 20px;
    }

    .sidebar {
      width: 200px;
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      border-radius: 8px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      text-decoration: none;
      margin-bottom: 10px;
      border-radius: 5px;
      background-color: #34495e;
      text-align: center;
    }

    .sidebar a:hover {
      background-color: #2980b9;
    }

    .content {
      flex-grow: 1;
      margin-left: 20px;
    }

    .content h2 {
      color: #2c3e50;
    }

    .content section {
      margin-bottom: 30px;
    }

    .content form input,
    .content form textarea,
    .content form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .book-data {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .book-data table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .book-data th, .book-data td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .book-data th {
      background-color: #2980b9;
      color: white;
    }

  </style>
</head>
<body>
  <div class="navbar">
    <h1>Bookstore Admin Panel</h1>
  </div>

  <div class="container">
    <!-- Sidebar for navigation -->
    <div class="sidebar">
      <a href="#" id="dashboardLink">Dashboard</a>
      <a href="#" id="addDataLink">Add Data</a>
      <a href="#" id="contactLink">Contact Details</a>
      <a href="#" id="homeLink">Home</a>
    </div>

    <!-- Main content area -->
    <div class="content">
      <!-- Dashboard Section -->
      <section id="dashboardSection">
        <h2>Dashboard</h2>
        <p>Welcome to the admin panel. Here you can manage books and website settings.</p>
      </section>

      <!-- Add Data Section -->
      <section id="addDataSection" style="display: none;">
        <h2>Add New Book</h2>
        <form id="addBookForm" method="POST" action="addBook.php" enctype="multipart/form-data">
    <input type="text" id="bookTitle" name="bookTitle" placeholder="Book Title" required>
    <input type="text" id="bookAuthor" name="bookAuthor" placeholder="Author" required>
    <input type="text" id="bookGenre" name="bookGenre" placeholder="Genre" required>
    <textarea id="bookDescription" name="bookDescription" placeholder="Book Description" required></textarea>
    
    <!-- Add image input field -->
    <input type="file" name="bookImage" accept="image/*" required>
    
    <button type="submit">Add Book</button>
</form>
      </section>

      <!-- Contact Details Section -->
      <section id="contactSection" style="display: none;">
        <h2>Contact Details</h2>
        <p>For any queries, please contact us at:</p>
        <p>Email: support@bookstore.com</p>
        <p>Phone: +123 456 7890</p>
      </section>

      <!-- Home Section -->
      <section id="homeSection" style="display: none;">
        <h2>Welcome to the Bookstore!</h2>
        <p>Browse through a wide selection of books.</p>
      </section>

      <!-- Display Data Section -->
      <section id="displayDataSection">
        <h2>Book Data</h2>
        <div class="book-data">
          <table id="bookDataTable">
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <!-- Data will be dynamically added here -->
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>

  <script>
    // Sample data storage (in a real app, use a database)
    let books = [];

    // Navigation links
    const dashboardLink = document.getElementById('dashboardLink');
    const addDataLink = document.getElementById('addDataLink');
    const contactLink = document.getElementById('contactLink');
    const homeLink = document.getElementById('homeLink');

    // Sections
    const dashboardSection = document.getElementById('dashboardSection');
    const addDataSection = document.getElementById('addDataSection');
    const contactSection = document.getElementById('contactSection');
    const homeSection = document.getElementById('homeSection');
    const displayDataSection = document.getElementById('displayDataSection');

    // Switch between sections
    function showSection(sectionToShow) {
      dashboardSection.style.display = 'none';
      addDataSection.style.display = 'none';
      contactSection.style.display = 'none';
      homeSection.style.display = 'none';
      displayDataSection.style.display = 'none';

      sectionToShow.style.display = 'block';
    }

    // Handle Add Book form submission
    document.getElementById('addBookForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const title = document.getElementById('bookTitle').value;
      const author = document.getElementById('bookAuthor').value;
      const genre = document.getElementById('bookGenre').value;
      const description = document.getElementById('bookDescription').value;

      const book = { title, author, genre, description };
      books.push(book);
      displayBooks();
      showSection(displayDataSection);
    });

    // Display the books in the table
    function displayBooks() {
      const tableBody = document.querySelector('#bookDataTable tbody');
      tableBody.innerHTML = '';
      books.forEach(book => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${book.title}</td>
          <td>${book.author}</td>
          <td>${book.genre}</td>
          <td>${book.description}</td>
        `;
        tableBody.appendChild(row);
      });
    }

    // Set up event listeners for navigation
    dashboardLink.addEventListener('click', () => showSection(dashboardSection));
    addDataLink.addEventListener('click', () => showSection(addDataSection));
    contactLink.addEventListener('click', () => showSection(contactSection));
    homeLink.addEventListener('click', () => showSection(homeSection));

    // Initialize with dashboard
    showSection(dashboardSection);
  </script>
</body>
</html>
