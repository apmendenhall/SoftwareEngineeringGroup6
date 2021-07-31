LAST UPDATED: 7/30/2021
# Book Browsing & Sorting:

----------Function----------
This feature allows the user to retrieve books from the database based on specific parameters.
The books can be sorted based on genre, copies sold, and ratings.
----------------------------

----------Available Functions----------
booksWithXgenre(int x) - Retrieves all of the books with the inputted genre X
topKSellers(int k) - Retrieves the top K books with the most copies sold where K is an integer of the user's choice
booksOfXRatingAndHigher(int x) - Retrieves all of the books that have a rating of X and higher where X is an integer from 1 - 5
XBooksAtATime(int X, int start) - Retrieves books from the database where the indices of the rows fall within the interval [start, start + X)
---------------------------------------

----------GetMappings for each function----------
booksWithXgenre(int x) - /bookswithxgenre
topKSellers(int k) - /topksellers
booksOfXRatingAndHigher(int x) - /booksofxratingandhigher
XBooksAtATime(int X, int start) - /xbooksatatime
-------------------------------

----------How to use----------
In order to use this feature, you must follow the following template to make calls:
"localhost8080:/[DESIRED GET MAPPING]?[OPTIONAL_PARAMETER_1]&[OPTIONAL PARAMETER 2]"
For example, if you wanted to retrieve all of the books with the genre "mystery", you would enter the following:
localhost8080:/bookswithxgenre?x=mystery
This will retrieve all of the books with that exact genre.
------------------------------

----------Examples----------
Goal: Retrieve books with "horror" genre
GET Call: localhost8080:/bookswithxgenre?x=horror

Goal: Retrieve the top 10 sellers
GET Call: localhost8080:/topksellers?k=10

Goal: Retrieve books with a rating of 3 and higher
GET Call: localhost8080:/booksofxratingandhigher?x=3

Goal: Retrieve 5 books starting at row 3 in the database (retrieve books from the range [3, 8)
GET Call: localhost8080:/xbooksatatime?x=5&start=3
------------------------------