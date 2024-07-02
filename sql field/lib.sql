






create database lib
use lib


-- --------------------------------------------------------

--
-- Table structure for table book
--

CREATE TABLE book (
  b_id varchar(255) NOT NULL,
  booksname varchar(50) NOT NULL,
  authorname varchar(50) NOT NULL,
  section varchar(50) NOT NULL,
  file_name varchar(255) NOT NULL,
  path varchar(200) NOT NULL
) 


--
-- Dumping data for table book
--

INSERT INTO book (b_id, booksname, authorname,  section, file_name, path) VALUES
('CS001', 'learning Python', 'Reema Thereja', 'cyber_security', 'CS001.pdf', 'ebooks/CS001.pdf'),
('CS002', 'Test Book', 'Test Author','cyber_security ', 'CS002.pdf', 'ebooks/CS002.pdf'),
('CS003', 'Test Book', 'Test Author','cyber_security', 'CS003.pdf', 'ebooks/CS003.pdf'),
('CS031', 'learning java', 'Test Author', 'cyber_security', 'CS031.pdf', 'ebooks/CS031.pdf'),
('CS005', 'Test Book', 'Test Author2', 'cyber_security', 'CS005.pdf', 'ebooks/CS005.pdf'),
('CS006', 'Test Book', 'Test Author', 'cyber_security', 'CS006.pdf', 'ebooks/CS006.pdf'),
('CS008', 'Test Book', 'Test Author', 'cyber_security', 'CS008.pdf', 'ebooks/CS008.pdf'),
('CS009', 'Book One', 'Reema Thereja', 'cyber_security', 'CS009.pdf', 'ebooks/CS009.pdf'),
('CS010', 'Test Book', 'Test Author', 'cyber_security', 'CS010.pdf', 'ebooks/CS010.pdf'),
('CS011', 'Test Book', 'Test Author','cyber_security', 'CS011.pdf', 'ebooks/CS011.pdf'),
('CS012', 'Test Book', 'Test Author', 'cyber_security', 'CS012.pdf', 'ebooks/CS012.pdf'),
('CS013', 'Test Book', 'Test Author',  'cyber_security', 'CS013.pdf', 'ebooks/CS013.pdf'),
('FMC001', 'Test Book', 'Test Author',  'fraud_managment', 'FMC001.pdf', 'ebooks/FM001.pdf'),
('SE001', 'Test Book', 'Test Author',  'security_engineering', 'SE001.pdf', 'ebooks/SE001.pdf'),
('RA001', 'Book One', 'Test Author',  'revenue_authority', 'RA001.pdf', 'ebooks/RA001.pdf'),
('CS055', 'Test Book', 'Test Author',  'cyber_security', 'CS055.pdf', 'ebooks/CS055.pdf');
--('CS044', 'Let Us c', 'YK',  'cyber_security', 'CS044.pdf', 'ebooks/CS044.pdf');

-- --------------------------------------------------------------------------------------------------------------------------

--
--Table structure for table student_book
--

CREATE TABLE sections_book (
  emailid varchar(200) NOT NULL,
  book_id varchar(100) NOT NULL,
  book_1 varchar(100) NOT NULL,
  upload_date varchar(100) DEFAULT NULL, ----- recive_date_2
  modified_date varchar(100) DEFAULT NULL   -----submisson_date_2
) 

--
-- Dumping data for table sections_book
--

INSERT INTO sections_book (emailid, book_id, book_1, upload_date, modified_date) 
VALUES('A@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018'),
      ('Ba@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018');

-- --------------------------------------------------------

--

-- Table structure for table employee_registration
--

CREATE TABLE employee_registration (
  id int NOT NULL,
  roll varchar(100) NOT NULL,
  type varchar(10) NOT NULL DEFAULT 'employee',
  gender varchar(10) NOT NULL,
  name varchar(50) NOT NULL,
  section varchar(50) NOT NULL,
  emailid varchar(50) NOT NULL,
  password varchar(20) NOT NULL
) 

--
-- Dumping data for table employee_registration
--

INSERT INTO employee_registration (id, roll, type, gender, name, section, emailid, password)
VALUES( 1,'ETH001', 'admin', 'm', 'admin', 'blank', 'admin001', 'admin123'),
       (2,  'ETH002', 'employee', 'm',  'mr.A',  'information_security',  'A@gmail.com',  'A123'),
	   (3, 'ETH003', 'employee', 'm', 'mr.B', 'fraud_managment', 'B@gmail.com', 'B123'),
	   (4, 'ETH004', 'employee', 'f', 'mr.C', 'revenue_authority', 'C@gmail.com', 'C123'),
       (5, 'ETH005', 'employee', 'f', 'mr.D', 'PMO', 'D@gmail.com', 'D123'),
       (6, 'ETH006', 'employee', 'm', 'mr.E', 'security_engineering','E@gmail.com', 'E123'),
       (7, 'ETH007', 'employee', 'm', 'mr.F', 'cyber_security', 'F@gmail.com', 'F123');


--
-- Indexes for dumped tables
--

--
-- Indexes for table book
--
ALTER TABLE book
  ADD PRIMARY KEY (b_id);
  --ADD UNIQUE KEY b_id (b_id);
 
--
-- Indexes for table student_book
--
ALTER TABLE sections_book
  ADD PRIMARY KEY (emailid);

--
-- Indexes for table employee_registration
--
ALTER TABLE employee_registration
  ADD PRIMARY KEY (id);
 
 --
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table student_registration
--
ALTER TABLE employee_registration
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  
