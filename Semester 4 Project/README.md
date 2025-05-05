# Train Booking Application

## Description
The Train Booking Application is a Java-based system designed to manage train routes, schedules, and ticket bookings. It provides a graphical user interface (GUI) for users to register, log in, book tickets, and manage their bookings. The application integrates with a MySQL database for data storage and includes email validation and notifications.

## Features
- **User Registration and Login**: Users can register with an email, name, and password, and log in with email and password validation.
- **Ticket Booking**: Users can book train tickets by selecting routes, times, and payment methods (e.g., cash at the station).
- **Booking Management**: Users can view and cancel their bookings, with booking history maintained for each user.
- **Train Routes and Schedules**: Predefined train routes and schedules are available for selection, stored in files like `Trainlines.txt` and `Traintimes.txt`.
- **Graphical User Interface (GUI)**: Built using Java Swing, with forms for registration, login, and booking management.
- **Database Integration**: Uses MySQL for storing user and booking data, requiring the `mysql-connector-j-8.0.32.jar` library.
- **Email Validation and Notifications**: Validates email addresses during registration and sends welcome emails to new users.

## Installation Instructions
1. Clone or download the project files to your local machine.
2. Ensure you have the Java Development Kit (JDK) installed on your system.
3. Install MySQL and set up a database for the application.
4. Add the `mysql-connector-j-8.0.32.jar` library to your project's classpath.
5. Open the project in your preferred Java IDE (e.g., IntelliJ IDEA, Eclipse, or NetBeans).

## Usage
1. Compile and run the `Main.java` file to start the application.
2. Register or log in using the GUI.
3. Use the application to book tickets, view routes, and manage your bookings.

## Dependencies
- **Java Development Kit (JDK)**: Required to compile and run the project.
- **MySQL Database**: Used for storing user and booking data.
- **MySQL Connector**: `mysql-connector-j-8.0.32.jar` is required for database connectivity.
- **Java Swing**: Used for building the GUI.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.