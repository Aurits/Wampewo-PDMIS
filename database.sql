-- Create the table for Parish Chiefs
CREATE TABLE IF NOT EXISTS Parish_Chiefs (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Contact_Information VARCHAR(255) NOT NULL,
    Responsibilities TEXT,
    Skills_Qualifications TEXT,
    Age INT,
    Village VARCHAR(100)
);

-- Create the table for Wampewo Citizens
CREATE TABLE IF NOT EXISTS Wampewo_Citizens (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Contact_Information VARCHAR(255) NOT NULL,
    Demographic_Data TEXT,
    Socio_Economic_Information TEXT,
    Village VARCHAR(100)
);

-- Create the table for Citizen Groups
CREATE TABLE IF NOT EXISTS Citizen_Groups (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Contact_Information VARCHAR(255) NOT NULL,
    Business_Description TEXT,
    Funding_Proposal TEXT,
    Number_of_People INT,
    Amount_for_Funding DECIMAL(10, 2)
);

-- Create the table for Government Supervision Parties
CREATE TABLE IF NOT EXISTS Government_Bodies (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Contact_Information VARCHAR(255) NOT NULL,
    Role TEXT,
    Authority TEXT
);
