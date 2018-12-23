CREATE DATABASE irl-game;

CREATE TABLE players (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    username varchar(100) not null,
    password varchar(100) not null
    -- add more fields for user schema
);