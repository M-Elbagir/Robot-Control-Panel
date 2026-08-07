# Control Panel

A simple web-based control panel for sending movement commands to a robot using a browser interface and voice recognition.

## Features

- Control buttons for moving the robot: forward, backward, left, right, and stop
- Voice command support using the browser speech recognition API
- Transcript display that shows recognized speech beneath the microphone button
- Dark-themed interface for a modern look
- Backend endpoint to store the latest command in a database

## Project Files

- index.html - Main web page with buttons, voice UI, and front-end logic
- update_command.php - Receives the selected command and updates the robot state in the database
- db.php - Database connection file
- get_state.php - Retrieves the current robot state
- setup.sql - SQL schema for initializing the database

## Requirements

- A web server with PHP support - `Infinityfree is used`
- A MySQL database
- A modern browser that supports speech recognition (such as Chrome)

## Setup

1. Place the project in your web server directory.
2. Create the database and import the contents of setup.sql.
3. Update the database connection settings in db.php.
4. Open index.html in your browser through the web server.

## Usage

- Click any movement button to send a command.
- Click the microphone button and speak a command such as:
  - forward
  - backward
  - left
  - right
  - stop

