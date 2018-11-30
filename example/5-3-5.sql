CREATE TABLE topic (
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(45) NOT NULL,
    description text,
    created datetime NOT NULL,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
