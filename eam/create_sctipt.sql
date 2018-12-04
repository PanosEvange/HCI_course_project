-- MySQL Script
-- -----------------------------------------------------
-- Base is  sdi1500039

-- -----------------------------------------------------
-- Table sdi1500039.Users
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Users (
  idUsers INT AUTO_INCREMENT NOT NULL ,
  Email VARCHAR(250) NOT NULL,
  Password VARCHAR(45) NOT NULL,
  FirstName VARCHAR(250) NOT NULL,
  LastName VARCHAR(250) NOT NULL,
  DateOfBirth VARCHAR(250) NOT NULL,
  Phone VARCHAR(10) NULL,
  Address VARCHAR(250) NULL,
  UserType VARCHAR(250) NOT NULL,
  PRIMARY KEY (idUsers)
);

-- -----------------------------------------------------
-- Table sdi1500039.Student
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Student (
  idStudent INT NOT NULL,
  DepartmentName VARCHAR(250) NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  PRIMARY KEY (idStudent)
);

-- -----------------------------------------------------
-- Table sdi1500039.Secretary
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Secretary (
  idSecretary INT NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  DepartmentName VARCHAR(250) NOT NULL,
  PRIMARY KEY (idSecretary)
);

-- -----------------------------------------------------
-- Table sdi1500039.University
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.University (
  UniversityName VARCHAR(250) NOT NULL,
  PRIMARY KEY (UniversityName)
);

-- -----------------------------------------------------
-- Table sdi1500039.Department
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Department (
  DepartmentName VARCHAR(250) NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  CONSTRAINT PK_Department PRIMARY KEY (UniversityName, DepartmentName)
);

-- Insert some mock data
INSERT INTO `University`(`UniversityName`)
                VALUES ('National and Kapodistrian Univeristy of Athens');
INSERT INTO `University`(`UniversityName`)
                VALUES ('Aristotelian Univerity of Thesalonica');

INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Informatics and Telecomunications', 'National and Kapodistrian Univeristy of Athens');
INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Mathematics', 'National and Kapodistrian Univeristy of Athens');
INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Mathematics', 'Aristotelian Univerity of Thesalonica');

INSERT INTO `Users`(`idUsers`, `Email`, `Password`, `FirstName`, `LastName`,
                    `DateOfBirth`, `Phone`, `Address`, `UserType`)
                    VALUES (0, 'dougas97@gmail.com', '123456789', 'Vagos',
                            'Spi', '10', '2102102102', 'Thar 5, ath, 17', 'Student');

INSERT INTO `Student`(`idStudent`, `DepartmentName`, `UniversityName`)
                VALUES (0, 'Department of Informatics and Telecomunications',
                        'National and Kapodistrian Univeristy of Athens' );
