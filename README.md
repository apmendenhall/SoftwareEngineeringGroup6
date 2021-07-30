# SoftwareEngineeringGroup6

---------------------------
BOOK DETAILS
---------------------------

Adding Books and Authors
----------------------------

To use the postman versions of the code, either run the code locally or use the link https://angelinne.com/BookDetailsPostman.php
The first entry with be either 'book' or 'author' (with a value of 1) depending on what you want to add. The next values for book will be:
ISBN, 
book_name, 
description, 
price, 
book_author, 
publisher_book, 
year, 
genre, 
copies_sold

For author, the values will be:
first_name, 
last_name, 
biography, 
publisher_author

To use the Command Line verision, open CMD and put in:
php test.php [book/author] [args...]

To use the form version of the code, open bookform.php or authorform.php in your browser or go to https://angelinne.com/book.php for books or https://angelinne.com/author.php for author.


Searching for Books
----------------------------

To use the postman versions of the code, either run the code locally or use the link https://angelinne.com/BookDetailsSearchPostman.php
The first entry will be 'mode'. Use the value 1 for author and the value 2 for ISBN. The next entry will be 'entry' and this will be by the data you would like to search for. 

To use the Command Line version, open CMD and put in:
php search.php [ISBN/author] [args...]

To use the form version of the code, open searchform.php in your browser or go to https://angelinne.com/search.php

---------------------------
BOOK DETAILS
---------------------------

This API allows you to Review a book where, you *may* leave a Comment, a Rating, Or both

The API is available at `localhost:8080/api/v1/bookie`

## Endpoints ##

### All Reviews ###

GET `/`

Returns all Stored Reviews within the Database. Along with:
- The Reviews Timestamps 
- The Average Rating of the Book
- The Number of Rates on the Book
- The Reviews' Book Rating and Comments
- Boom Review ID

### Submit a Review ###

POST `/`, 

Along with Submitted JSON Content-Type including Review in Raw Data Format.

Allows you to submit a new Review.

The request body needs to be in JSON format and include the following properties:

 - `bookTitle` - Integer - Required
 - `bookReview` - String - Optional
 - `bookRating` - Integer - Required

Example
```
POST '/'

{
  "bookTitle": "Harry Potter and the Sorcerer's Stone",
  "bookReview": "7"
}
```
The response body will contain the Status Code along with *No* Message.
If a Post Request is made on a Book that has Existing Reviews, The Book Rating is Used
to Calculate the New Book Rating Average of the Specific Book at hand. Along with this,
The Amount of Book Ratings is Incremented for this Book. 

### Update a Review ###

Put `/studentID?{key being Updated = Updated Value}` ID-Type: Long

Allows you to Update a review and change only the Review and/or the Rating.

### Deleting a Review ###

DELETE `/studentId`

Allows you to Delete a review with Student ID: {`studentId`}








