# String Checker
### BDD exercise for Epicodus | 07.07.2017

By Max Scher

## Description


## Setup


## Specifications
1. It can return how frequently a single-character word occurs within a given single-character string.
  * Example Input Word: 'I'
  * Example Input String: 'A'
  * Example Output: 0
  <!---The above values have been chosen because they are single-character expressions that are also English-language words. Searching for 'I' in 'A' ensures zero instances of 'I'--->


2. It can return how frequently a single-letter word occurs within a given single-letter string, regardless of case.
  * Example Input Word: 'a'
  * Example Input String: 'A'
  * Example Output: 1
  <!---The above values have been chosen to demonstrate that the program will recognize a lowercased and uppercased instances of a character as the same character; 'a' should be recognized as equivalent to 'A'. Also, the developer prefers each test to have a unique output value; using 'a' and 'A' ensures an output of 1, which will differ from the previous test's output of 0--->


3. It can return how frequently a single-character word occurs within a given multi-character string
  * Example Input Word: 'a'
  * Example Input String: 'A mouse once ate a cookie...'
  * Example Output: 2
  <!---The above values have been chosen to verify the continued integrity of the previous tests (single-character input and case-agnostic program), while also adding the complexity of searching within a multi-word string. Also, the developer prefers each test to have a unique output value; the above values ensure an output of 2, which will differ from the previous tests' outputs of 0 and 1, respectively--->


4. It can return how frequently a multi-character word occurs within a given string
  * Example Input Word: 'taco'
  * Example Input String: 'I am a taco fiend and I want a taco from Taco Bell'
  * Example Output: 3
  <!---The above values have been chosen to verify the continued integrity of the previous tests, while also expanding functionality to include searching for a more complex user input (multi-character word). Also, the developer prefers each test to have a unique output value; the above values ensure an output of 3, which will differ from the previous tests' outputs of 0, 1, and 2, respectively--->


5. It can return how frequently a word occurs within a given string, excluding instances of the target word within another word
  * Example Input Word: 'baby'
  * Example Input String: 'Baby's day out on the town was the best thing we could do for baby, especially considering it was baby's birthday'
  * Example Output: 1
  <!---The above values have been chosen because it ensures the program will not discover an instance of "baby" within the expression "baby's"--->

## Languages Used


## Known Bugs


## License Information
