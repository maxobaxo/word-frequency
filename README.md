# String Checker
### BDD exercise for Epicodus | 07.07.2017

By Max Scher

## Description


## Setup


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
  <!---The above values have been chosen to verify the continued integrity of the previous tests (single-character input and case-agnostic program), while also adding the complexity of searching within a multi-word string. Also, the developer prefers each test to have a unique output value; the above values ensure an output of 2, which will differ from the previous tests' outputs of 0 and 1, respectively--->


4. It can return how frequently a target word occurs within a given string, including instances of the target word adjacent to punctuation.
  * Example Input Word: 'sweet'
  * Example Input String: 'Sweet Caroline is the sweetest song of all the #sweet songs I know to be sweet!'
  * Example Output: 3
  <!---The above values have been chosen to verify the continued integrity of the previous tests, while also expanding functionality to allow the program to recognize the target word when appearing adjacent to punctuation--->


5. It can return how frequently a target word occurs within a given string, only when the user submits strings in both form fields.
  * Example Inputs
    * Target word: 'baby'
    * String: ''
  * Example Output: 'You must enter a target word and a sample string to receive a result'
  <!---The above values have been chosen because it ensures the program will not return a result unless it receives two string inputs from the user. The example string input of "" will return an error message"--->

## Languages Used


## Known Bugs


## License Information
