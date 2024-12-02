
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .buttons {
      position: fixed;
      top: 60px;
      left: 0px;
      z-index: 1000;
      width: 100%;
      display: flex;
    }
    .buttons button {
      width: 50%;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border: 0;
      background-color: #C83B4C;
      transition: background-color 0.3s;
    }
    .buttons button.active {
      background-color: #46265C;
      color: white;
    }
    iframe {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      border: none;
      display: none;
    }
    iframe.active {
      display: block;
    }
  </style>
</head>
<body>
  <div class="buttons" style="position: fixed;top: 60px;height: 40px;">
    <button id="btn-page1" onclick="showPage('page1', 'btn-page1')" style="font-family: itim;" >Show Page 1</button>
    <button id="btn-page2" onclick="showPage('page2', 'btn-page2')" style="font-family: itim;">Show Page 2</button>
  </div>

  <!-- Make page1 active initially -->
  <iframe id="page1" class="active" src="admin/Today Matchs.php"></iframe>
  <iframe id="page2" src="admin/view_matches.html" style="width: 100%;position: absolute;top: 100px;"></iframe>

  <script>
    function showPage(pageId, buttonId) {
      // Hide all iframes
      document.querySelectorAll('iframe').forEach(iframe => {
        iframe.classList.remove('active');
      });

      // Show the selected iframe
      document.getElementById(pageId).classList.add('active');

      // Remove active class from all buttons
      document.querySelectorAll('.buttons button').forEach(button => {
        button.classList.remove('active');
      });

      // Add active class to the selected button
      document.getElementById(buttonId).classList.add('active');
    }

    // Set the initial active button
    document.getElementById('btn-page1').classList.add('active');
  </script>

