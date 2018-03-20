DROP DATABASE IF EXISTS conferences;
CREATE DATABASE conferences;

USE conferences;

DROP TABLE IF EXISTS registration;

CREATE TABLE registration (
    registrationID  INT(11)         NOT NULL    AUTO_INCREMENT,
    firstName       VARCHAR(255)    NOT NULL,
    lastName        VARCHAR(255)    NOT NULL,
    title           VARCHAR(255)    NOT NULL,
    organization    VARCHAR(255)    NOT NULL,
    attendee        VARCHAR(255)    NOT NULL,
    address         VARCHAR(255)    NOT NULL,
    city            VARCHAR(255)    NOT NULL,
    state           VARCHAR(2)      NOT NULL,
    zip             VARCHAR(10)     NOT NULL,
    phone           VARCHAR(12)     NOT NULL,
    cardType        VARCHAR(255)    NOT NULL,
    cardNumber      VARCHAR(255)    NOT NULL,
    expDate         VARCHAR(255)    NOT NULL,
    paid            BOOLEAN         NOT NULL,
    confirmation    VARCHAR(255)    NOT NULL,
  PRIMARY KEY (registrationID)
);


DROP TABLE IF EXISTS feedback;

CREATE TABLE feedback (
    feedbackID      INT(11)         NOT NULL    AUTO_INCREMENT,
    firstName       VARCHAR(255)    NOT NULL,
    lastName        VARCHAR(255)    NOT NULL,
    email           VARCHAR(255)    NOT NULL,
    comments        VARCHAR(255)    NOT NULL,
  PRIMARY KEY (feedbackID)
);


DROP TABLE IF EXISTS area;

CREATE TABLE area (
    areaID          INT(11)         NOT NULL    AUTO_INCREMENT,
    areaName        VARCHAR(255)    NOT NULL,
  PRIMARY KEY (areaID)
);

INSERT INTO area VALUES
(1, 'Computer Security'),
(2, 'Artifical Inteligence'),
(3, 'Parallel Processing'),
(4, 'Computer Visualization');


DROP TABLE IF EXISTS subarea;

CREATE TABLE subarea (
    subareaID       INT(11)         NOT NULL    AUTO_INCREMENT,
    areaID          INT(11)         NOT NULL,
    subareaName     VARCHAR(255)    NOT NULL,
  PRIMARY KEY (subareaID)
);

INSERT INTO subarea VALUES
(1, 1, 'Network Security'),
(2, 1, 'Cloud Computing Security'),
(3, 1, 'Mobile Device Security'),
(4, 2, 'Artificial Intuition'),
(5, 2, 'Artificial Thinking'),
(6, 3, 'Parallel Algorithms'),
(7, 3, 'GPU Computation'),
(8, 3, 'Scientific Parallel Systems'),
(9, 4, 'Volume Visualization'),
(10, 4, 'Computer Graphics');


DROP TABLE IF EXISTS paper;

CREATE TABLE paper (
    paperID         INT(11)         NOT NULL    AUTO_INCREMENT,
    authorName      VARCHAR(255)    NOT NULL,
    title           VARCHAR(255)    NOT NULL,
    areaID          INT(11)         NOT NULL,
    subareaID       INT(11)         NOT NULL,
    fileName        VARCHAR(255)    NOT NULL,
    confirmation    VARCHAR(255)    NOT NULL,
  PRIMARY KEY (paperID)
);

INSERT INTO paper VALUES
(1, 'Jon Erickson', 'Hacking: The Art of Exploitation', 1, 2, 'The Art of Exploitation.docx', '45969487616433677'),
(2, 'Steven S Skiena', 'The Algorithm Design Manual', 2, 5, 'Algorithm Design.docx', '01982406431514497'),
(3, 'Donald E. Knuth', 'The Art of Computer Programming', 3, 6, 'Computer Programming.docx', '01982406431514497'),
(4, 'Matt Bishop', 'Computer Security: Art and Science', 1, 1, 'Computer Security.docx', '01982406431514497'),
(5, 'David A. Patterson', 'Computer Architecture', 4, 9, 'Architecture.docx', '01982406431514497');


DROP TABLE IF EXISTS reviewer;

CREATE TABLE reviewer (
    reviewerID      INT(11)         NOT NULL    AUTO_INCREMENT,
    emailAddress    VARCHAR(255)    NOT NULL,
    password        VARCHAR(255)    NOT NULL,
    areaID          INT(11)         NOT NULL,
    subareaID       INT(11)         NOT NULL,
  PRIMARY KEY (reviewerID)
);

INSERT INTO reviewer VALUES
(1, 'reviewer1@conferences.com', '06342c96420583725f07afc9dd582f9dbd239343', 0, 0),
(2, 'reviewer2@conferences.com', 'fc42941d7fa424c286c1967550bcaa1e9d8b22ad', 1, 0),
(3, 'reviewer3@conferences.com', 'b7b32b7c7c73a00ee80db084574cd820b4dc8c8a', 0, 5);


DROP TABLE IF EXISTS book;

CREATE TABLE book (
    bookID          INT(11)         NOT NULL    AUTO_INCREMENT,
    title           VARCHAR(255)    NOT NULL,
    author          VARCHAR(255)    NOT NULL,
    price           DECIMAL(10,2)   NOT NULL,
  PRIMARY KEY (bookID)
);

INSERT INTO book VALUES
(1, 'The Hidden Language of Computer Hardware and Software', 'Charles Petzold', '17.99'),
(2, 'Computer Science Illuminate', 'Nell Dale and John Lewis', '155.35'),
(3, 'Algorithms to Live By: The Computer Science of Human Decision', 'Brian Christian and Tom Griffiths', '17.23'),
(4, 'Hacking: The Art of Exploitation', 'Jon Erickson', '30.74'),
(5, 'Python Programming: An Introduction to Computer Science', 'John Zelle', '19.99'),
(6, 'Computer Science: An Interdisciplinary Approach', 'Robert Sedgewick and Kevin Wayne', '67.19'),
(7, 'How Computers Work: The Evolution of Technology', 'Ron White and Timothy Edward Downs', '33.19'),
(8, 'Concrete Mathematics: A Foundation for Computer Science', 'Ronald L. Graham and Donald E. Knuth', '25.74'),
(9, 'Introduction to Algorithms', 'Thomas H. Cormen and Charles E. Leiserson', '28.19'),
(10, 'Computer Systems: A Programmer\'s Perspective', 'Randal E. Bryant and David R. O\'Hallaron', '46.83'),
(11, 'Introduction to the Theory of Computation', 'Michael Sipser', '236.97'),
(12, 'Coding the Matrix: Linear Algebra through Applications to Computer Science', 'Philip N. Klein', '33.25'),
(13, 'Python Machine Learning', 'Sebastian Raschka', '40.49'),
(14, 'Computer Age Statistical Inference: Algorithms, Evidence, and Data Science', 'Bradley Efron and Trevor Hastie', '66.88'),
(15, 'The Algorithm Design Manual', 'Steven S Skiena', '71.96'),
(16, 'The Art of Computer Programming', 'Donald E. Knuth', '83.39'),
(17, 'Big Data: A Revolution That Will Transform How We Live, Work, and Think', 'Viktor Mayer-Schonberger and Kenneth Cukier', '9.00'),
(18, 'Data Science from Scratch: First Principles with Python', 'Joel Grus', '31.90'),
(19, 'Introductory Discrete Mathematics', 'V. K . Balakrishnan', '13.46'),
(20, 'Graph Theory with Applications to Engineering and Computer Science', 'Narsingh Deo', '29.95'),
(21, 'Biomedical Informatics: Computer Applications in Health Care and Biomedicine', 'Edward H. Shortliffe and James J. Cimino', '23.91'),
(22, 'Design Patterns: Elements of Reusable Object-Oriented Software', 'Erich Gamma and Richard Helm', '14.72'),
(23, 'Web Technologies: A Computer Science Perspective', 'Jeffrey C. Jackson', '170.00'),
(24, 'Introduction to Artificial Intelligence', 'Philip C. Jackson Jr.', '3.99'),
(25, 'Computational Statistics Handbook with MATLAB', 'Wendy L. Martinez and Angel R. Martinez', '94.05'),
(26, 'Quantum Computer Science: An Introduction', 'N. David Mermin', '25.22'),
(27, 'Computation Structures', 'Stephen Ward and Robert Halstead', '104.99'),
(28, 'Handbook of Logic and Proof Techniques for Computer Science', 'Steven G Krantz', '119.00'),
(29, 'Programming Computer Vision with Python: Tools and algorithms for analyzing images', 'Jan Erik Solem', '32.65'),
(30, 'The Beginner\'s Guide to Engineering: Computer Engineering', 'James Lance', '16.99'),
(31, 'Computer Security: Art and Science', 'Matt Bishop', '87.45'),
(32, 'Data Science for Business: What You Need to Know about Data Mining and Data-Analytic Thinking', 'Foster Provost and Tom Fawcett', '32.59'),
(33, 'Java Concepts: Advanced Placement Computer Science Study Guide', 'Frances P. Trees and Cay S. Horstmann', '61.18'),
(34, 'The Art and Science of C: A Library Based Introduction to Computer Science', 'Eric S. Roberts', '140.00'),
(35, 'The Art of Computer Virus Research and Defense', 'Peter Szor', '39.90'),
(36, 'Computer Vision: Algorithms and Applications', 'Richard Szeliski', '62.94'),
(37, 'An Introduction to Information Theory: Symbols, Signals and Noise ', 'John R. Pierce', '7.11'),
(38, 'Computer Architecture', 'David A. Patterson', '62.97'),
(39, 'Pattern Recognition and Machine Learning', 'Christopher Bishop', '75.96'),
(40, 'Web Design with HTML, CSS, JavaScript and jQuery Set', 'Jon Duckett', '32.25'),
(41, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'Robert C. Martin', '42.43'),
(42, 'Learn Java in One Day and Learn It Well', 'Jamie Chan', '10.12'),
(43, 'The Pragmatic Programmer: From Journeyman to Master', 'Andrew Hunt and David Thomas', '32.59'),
(44, 'Beginning C++ Through Game Programming', 'Michael Dawson', '21.47'),
(45, 'The C Programming Language', 'Brian W. Kernighan and Dennis M. Ritchie', '52.89');


GRANT SELECT, INSERT, DELETE, UPDATE
ON conferences.*
TO db_user@localhost
IDENTIFIED BY 'pa55word';