CREATE DATABASE Blog;

Use Blog;

CREATE TABLE Users(
    Id   INT IDENTITY(1,1) NOT NULL,      
    FirstName     varchar(100) NOT NULL, 
    LastName   varchar(255),
    Email      varchar(255) NOT NULL,
    PasswordUs       varchar(255) NOT NULL,
    StarDate   DATETIME,
    CONSTRAINT pk_Users PRIMARY KEY(Id),
    CONSTRAINT Uq_Email UNIQUE(Email)
);

CREATE TABLE Category(
    Id  INT IDENTITY(1,1) NOT NULL,
    Names VARCHAR(15),
    CONSTRAINT Pk_Category PRIMARY KEY(Id)
);

CREATE TABLE Inputs(
    Id INT IDENTITY(1,1) NOT NULL,
    Id_Users INT NOT NULL,
    Id_Category INT NOT NULL, 
    Title VARCHAR(15) NOT NULL,
    Descriptions VARCHAR(Max),
    InputDate DATETIME,
    CONSTRAINT pk_Inputs PRIMARY KEY(Id),
    CONSTRAINT Fk_Input_Users FOREIGN KEY(Id_Users) REFERENCES Users(Id),
    CONSTRAINT Fk_Input_Category FOREIGN KEY(Id_Category) REFERENCES Category(Id)
);