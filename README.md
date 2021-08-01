---------------------------
BOOK REVIEWS
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








