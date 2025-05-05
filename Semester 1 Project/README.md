# 4x4 Sudoku Solver

## Description
This project is a 4x4 Sudoku Solver implemented in C. It allows users to input a partially filled 4x4 Sudoku grid and solves it using a backtracking algorithm. The program ensures that the Sudoku rules are followed, and the solution is saved to a file in the same directory as the source code.

## Features
- **Input Validation**: Ensures user inputs are between 0-4 and do not violate Sudoku rules.
- **Backtracking Algorithm**: Efficiently solves the Sudoku puzzle.
- **Grid Display**: Prints the Sudoku grid at each step of the solving process.
- **File Output**: Saves the solved Sudoku grid to `OutputProject.txt` in the same directory as the source code.

## Installation Instructions
1. Clone or download the project files to your local machine.
2. Ensure you have a C compiler (e.g., GCC) installed on your system.

## Usage
1. Compile the program using a C compiler. For example:
   ```bash
   gcc Semester_Project.c -o SudokuSolver
   ```

2. Run the compiled program:
   ```bash
   ./SudokuSolver
   ```

3. Follow the on-screen instructions to input the Sudoku grid.

4. The solved Sudoku grid will be saved to OutputProject.txt in the same directory.

## Dependencies 
1. A C compiler (e.g., GCC).

2. The program writes the output to a file named `OutputProject.txt` in the same directory.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.