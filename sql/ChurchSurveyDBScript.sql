USE csci3350001;

/*
*DROP EVERYTHING
NOTE: order matters
*/
 
DROP TABLE Users;
DROP TABLE SurveyAnswers;
DROP TABLE StatusOfSections;
DROP TABLE StatusOfChoices;
DROP TABLE Members;
DROP TABLE Statuses;
DROP TABLE Choices;
DROP TABLE Sections;

/*
*CREATE TABLES
*/
CREATE TABLE Users
(
	UserID					SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	UserType 				VARCHAR(20) NOT NULL UNIQUE,
	Password 				VARCHAR(20) NOT NULL UNIQUE,
	Email 					VARCHAR(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Statuses
(
	StatusID 				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Type 					VARCHAR(20)
)ENGINE=InnoDB;

CREATE TABLE Members
(
	MemberID 				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	FName 					VARCHAR(35) NOT NULL,
	LName 					VARCHAR(35) NOT NULL,
	ParentFName				VARCHAR(35),
	ParentLName				VARCHAR(35),
	Address 				VARCHAR(100),
	CellPhone 				VARCHAR(20),
	HomePhone 				VARCHAR(20),
	WorkPhone 				VARCHAR(20),
	Text 					BOOL NOT NULL DEFAULT FALSE,
	Email 					VARCHAR(320),
	Gender 					ENUM('M', 'F'),
	StatusID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkMemberType FOREIGN KEY (StatusID) REFERENCES Statuses(StatusID) ON DELETE CASCADE,
	SurveyUpdated			TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB;

CREATE TABLE Sections
(
	SectionID 				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Text 					TEXT NOT NULL,
	OldFlag 				BOOL NOT NULL DEFAULT FALSE,
	Tag						VARCHAR(50),
							UNIQUE KEY Text (Text(255))
)ENGINE=InnoDB;

CREATE TABLE StatusOfSections
(	
	StatusOfSectionID		SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
	SectionID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkSection FOREIGN KEY (SectionID) REFERENCES Sections(SectionID) ON DELETE CASCADE,	
	StatusID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkSectionStatus FOREIGN KEY (StatusID) REFERENCES Statuses(StatusID) ON DELETE CASCADE,
	Position 				SMALLINT UNSIGNED NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Choices
(
	ChoiceID 				SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	SectionID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkChoiceSection FOREIGN KEY (SectionID) REFERENCES Sections(SectionID) ON DELETE CASCADE,
	Text 					TEXT,
	Description 			TEXT,
	OldFlag 				BOOL NOT NULL DEFAULT FALSE
)ENGINE=InnoDB;

CREATE TABLE StatusOfChoices
(
	StatusOfChoiceID 		SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
	ChoiceID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkChoice FOREIGN KEY (ChoiceID) REFERENCES Choices(ChoiceID) ON DELETE CASCADE,							
	StatusID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkChoiceStatus FOREIGN KEY (StatusID) REFERENCES Statuses(StatusID) ON DELETE CASCADE,
	Position 				SMALLINT UNSIGNED NOT NULL
)ENGINE=InnoDB;

CREATE TABLE SurveyAnswers
(	
	SurveyAnswerID			SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
	ChoiceID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkAnswerChoice FOREIGN KEY (ChoiceID) REFERENCES Choices(ChoiceID) ON DELETE CASCADE,	
	MemberID 				SMALLINT UNSIGNED NOT NULL,
							CONSTRAINT FkAnswerMember FOREIGN KEY (MemberID) REFERENCES Members(MemberID) ON DELETE CASCADE
)ENGINE=InnoDB;

/*
* INSERT DEFAULT DATA
*/

INSERT INTO Statuses(Type) VALUES ('ADULT');
INSERT INTO Statuses(Type) VALUES ('CONFIRMED YOUTH');
INSERT INTO Statuses(Type) VALUES ('CHILD');

INSERT INTO Users(UserType, Password, Email) VALUES ('CHURCH MEMBER','member','tmp@tmp.com');
INSERT INTO Users(UserType, Password, Email) VALUES ('COMMITTEE CHAIR','committee','tmp@tmp.com');
INSERT INTO Users(UserType, Password, Email) VALUES ('ADMIN','admin','tmp@tmp.com');
