# 🐘 Task S2.01. PHP Fundamentals — Level 1

Practice of PHP basics: variables, constants, conditionals, loops and functions.

---

## 📄 Description

This project applies programming fundamentals adapted to PHP. The exercises cover variable types, basic operations, string manipulation, functions with default parameters, conditionals and loops — leaving arrays for the next topic.

---

## 🎯 Learning objectives

- Create and use variables and constants
- Operate with variables of different types
- Practice conditional and loop statements
- Isolate source code into reusable functions

---

## 🛠 Technologies

- **PHP 8+**

---

## 📁 Project structure

```
├── exercise1.php
├── exercise2.php
├── exercise3.php
├── exercise4.php
├── exercise5.php
├── exercise6.php
└── README.md
```

---

## 📝 Exercises summary

| Exercise | Description |
|----------|-------------|
| **Exercise 1** | Define variables of each type (`integer`, `double`, `string`, `boolean`) and a named constant |
| **Exercise 2** | String manipulation: uppercase, length, reverse, concatenation |
| **Exercise 3** | Arithmetic operations between integers and doubles; function that receives two numbers and an operation type |
| **Exercise 4** | Function that counts up to a given number with a configurable step and a default value of 10 |
| **Exercise 5** | Function that returns a student's grade division based on their score percentage |
| **Exercise 6** | Function `isBitten()` that returns `TRUE` or `FALSE` with a 50% probability using `rand()` |

---

## 🚀 How to run the project

1. Clone the repository:
   ```bash
   git clone https://github.com/AlexMartG/TascaS1.02.git
   ```

2. Make sure you have PHP installed:
   ```bash
   php --version
   ```

3. Run any exercise from the terminal:
   ```bash
   php exercise1.php
   ```

---

## ⚠️ Challenges faced

- Handling all edge cases in the arithmetic function (Exercise 3), especially division by zero.
- Setting up default parameter values correctly in PHP functions (Exercise 4).
- Understanding how `rand()` works to achieve a real 50% probability (Exercise 6).

---

## ✅ Best practices applied

- Each exercise isolated in its own file
- Functions used to avoid code repetition
- Edge cases considered before implementation
