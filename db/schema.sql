CREATE DATABASE CodeMuse;

use CodeMuse;
warnings

CREATE TABLE difficulty (
    pDifficulty INT NOT NULL PRIMARY KEY,
    difName     VARCHAR(30) NOT NULL
);

CREATE TABLE project (
    pID         INT NOT NULL PRIMARY KEY,
    pName       VARCHAR(100),
    pTagline    VARCHAR(140),
    pDescr      VARCHAR(500),
    pDetails    VARCHAR(500),
    pDifficulty INT NOT NULL,
        FOREIGN KEY (pDifficulty) REFERENCES difficulty (pDifficulty)
);

CREATE TABLE tag (
    tagName     VARCHAR(30) NOT NULL PRIMARY KEY
);

CREATE TABLE project_tag (
    pID         INT NOT NULL,
    tagName     VARCHAR(30) NOT NULL,
        FOREIGN KEY (pID) REFERENCES project (pID),
        FOREIGN KEY (tagName) REFERENCES tag (tagName),
        PRIMARY KEY (pID, tagName)
);

CREATE TABLE state (
    stateAbbr     VARCHAR(2) NOT NULL PRIMARY KEY,
    stateName     VARCHAR(30) NOT NULL
);

CREATE TABLE featured (
    pID         INT NOT NULL PRIMARY KEY,
        FOREIGN KEY (pID) REFERENCES project (pID)
);

CREATE TABLE city (
    cityAbbr     VARCHAR(5) NOT NULL PRIMARY KEY,
    cityName     VARCHAR(30) NOT NULL,
    stateAbbr     VARCHAR(2) NOT NULL,
        FOREIGN KEY (stateAbbr) REFERENCES state (stateAbbr)
);

CREATE TABLE user (
    username      VARCHAR(100) NOT NULL PRIMARY KEY,
    firstName     VARCHAR(100) NOT NULL,
    lastName      VARCHAR(100) NOT NULL,
    password      VARCHAR(100) NOT NULL,
    email         VARCHAR(100) NOT NULL,
    stateAbbr     VARCHAR(2) NOT NULL,
        FOREIGN KEY (stateAbbr) REFERENCES state (stateAbbr)
);

