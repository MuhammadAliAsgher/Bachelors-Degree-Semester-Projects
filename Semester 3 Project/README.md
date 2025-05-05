# BRT Red Line Ticketing System

## Description
The BRT Red Line Ticketing System is a Java-based application designed to manage bus routes, stops, and seat bookings for a bus rapid transit system. It provides a graphical user interface (GUI) for users to book tickets, view routes, and manage their travel history.

## Features
- **Route and Stop Management**: Predefined routes and stops for the BRT system.
- **Ticket Booking**: Users can book seats based on their gender (separate seating for males and females). Seat availability is dynamically updated.
- **Travel History**: Users can view their past trips, including route, bus number, and timestamps.
- **Graphical User Interface (GUI)**: Built using Java Swing, with tables for displaying routes and history, and buttons for booking tickets.
- **File-Based Storage**: Data is stored in text files (e.g., `Bus11.txt`, `username.txt`) for persistence. Each bus has a separate file to track seat availability.
- **Validation**: Ensures valid seat selection and prevents double booking.

## Installation Instructions
1. Clone or download the project files to your local machine.
2. Ensure you have the Java Development Kit (JDK) installed on your system.
3. Open the project in your preferred Java IDE (e.g., IntelliJ IDEA, Eclipse, or NetBeans).

## Usage
1. Compile and run the `Main.java` file to start the application.
2. Register or log in using the GUI.
3. Use the application to book tickets, view routes, and manage your travel history.

## Dependencies
- **Java Development Kit (JDK)**: Required to compile and run the project.
- **Swing Library**: Used for building the GUI (included in JDK).

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.