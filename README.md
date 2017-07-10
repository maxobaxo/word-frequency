# String Checker
### BDD exercise for Epicodus | 07.07.2017

By Max Scher

## Description
This silex web application returns the number of times a word appears in a given string. The user can input both the word and string of words to check. The program checks for full word matches only.

## Setup
* Open GitHub site on your browser: https://github.com/maxobaxo/word-frequency
* Select the green dropdown menu to clone this repository.
* Copy the link for the GitHub repository.
* Open Terminal on your computer.
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then paste the repository link, and press enter
    * type 'cd word-frequency' to access the path on your computer
    * type 'composer install' in terminal to download dependencies
    * type 'cd web' to enter the web folder
    * type 'php -S localhost:8000' to open local server
* In your browser, enter the url 'localhost:8000' to view the webpage.
* Enter in a word and a string to search, then click "get 'em".

## Specifications
1. It can return how frequently a target word occurs within a given string.
    * Example Inputs:
        * Target Word: 'I'
        * String: 'A'
    * Example Output: 0
    <!---The above values have been chosen because they are single-character expressions that are also English-language words. Searching for 'I' in 'A' ensures zero instances of 'I'--->


2. It can return how frequently a target word occurs within a given string, regardless of case.
    * Example Inputs:
        * Target Word: 'a'
        * String: 'A'
    * Example Output: 1
    <!---The above values have been chosen to demonstrate that the program will recognize a lowercased and uppercased instances of a character as the same character; 'a' should be recognized as equivalent to 'A'. Also, the developer prefers each test to have a unique output value; using 'a' and 'A' ensures an output of 1, which will differ from the previous test's output of 0--->


3. It can return how frequently a target word occurs within a given string, ignoring instances of the target word appearing within another word.
    * Example Inputs
        * Target word: 'a'
        * String: 'A mouse once ate a cookie...'
    * Example Output: 2
    <!---The above values have been chosen to verify the continued integrity of the previous tests (single-character input and case-agnostic program), while also adding the complexity of ignoring instances of target word within another word (i.e. 'a' within 'ate'). Also, the developer prefers each test to have a unique output value; the above values ensure an output of 2, which will differ from the previous tests' outputs of 0 and 1, respectively--->


4. It can return how frequently a target word occurs within a given string, including instances of the target word adjacent to punctuation.
    * Example Inputs
        * Target word: 'sweet'
        * String: 'Sweet Caroline is the sweetest song of all the #sweet songs I know to be sweet!'
    * Example Output: 3
    <!---The above values have been chosen to verify the continued integrity of the previous tests, while also expanding functionality to allow the program to recognize the target word when appearing adjacent to punctuation--->


5. It can return how frequently a target word occurs within a given string, only when the user submits strings in both form fields.
    * Example Inputs
        * Target word: 'empty'
        * String: ''
    * Example Output: 'You must enter a target word and a sample string to receive a result'
    <!---The above values have been chosen because it ensures the program will not return a result unless it receives two string inputs from the user. The example string input of "" will return an error message"--->

## Languages Used
Git, PHP, HTML, CSS, Twig, JSON

## License Information
This application is licensed under the MIT License.

Copyright &copy; Max Scher 2017
