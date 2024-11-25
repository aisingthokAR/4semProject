<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VotingSystem Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .sidebar {
            width: 20%;
            background-color: #2d3e50;
            padding: 20px;
            color: white;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #00b4d8;
        }

        .sidebar a {
            display: block;
            padding: 10px 15px;
            margin: 10px 0;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #00b4d8;
        }

        .main {
            width: 80%;
            padding: 20px;
            background-color: #f4f4f9;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #333;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            margin-bottom: 15px;
        }

        .card p {
            font-size: 40px;
            margin: 10px 0;
        }

        .card.blue {
            background-color: #00b4d8;
            color: white;
        }

        .card.green {
            background-color: #2ec4b6;
            color: white;
        }

        .card.orange {
            background-color: #ff8000;
            color: white;
        }

        .card.red {
            background-color: #e63946;
            color: white;
        }

        .card .more-info {
            margin-top: 10px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
            cursor: pointer;
        }

        .print-button {
            margin-top: 20px;
            text-align: center;
        }

        .print-button button {
            background-color: #00b4d8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button button:hover {
            background-color: #0288a3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
            }

            .main {
                width: 100%;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3>VotingSystem</h3>
        <a href="#">Dashboard</a>
        <a href="#">Votes</a>
        <a href="#">Candidates</a>
        <a href="#">Election </a>
        <a href="#">Result </a>
    </div>
    <div class="main">
        <div class="header">
            <h2>Dashboard</h2>
            <div>User: Voter</div>
        </div>
        <div class="cards">
            <div class="card blue">
                <h3>No. of Positions</h3>
                <p>0</p>
                <div class="more-info">More info</div>
            </div>

            <div class="card green">
                <h3>No. of Candidates</h3>
                <p>0</p>
                <div class="more-info">More info</div>
            </div>

            <div class="card orange">
                <h3>Total Votes</h3>
                <p>1</p>
                <div class="more-info">More info</div>
            </div>

            <div class="card red">
                <h3>Voters Voted</h3>
                <p>0</p>
                <div class="more-info">More info</div>
            </div>
        </div>
        <div class="print-button">
        </div>
    </div>

</body>

</html>