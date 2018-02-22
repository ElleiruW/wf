USE test;
ALTER TABLE person_address ADD INDEX who_lives_here (Personid), ADD CONSTRAINT anastasia FOREIGN KEY (Personid) REFERENCES Person (id);
ALTER TABLE person_address ADD INDEX where_do_they_live (Addressid), ADD CONSTRAINT catharina FOREIGN KEY (Addressid) REFERENCES Address (id);
ALTER TABLE Address ADD INDEX lives_in_town (Townid), ADD CONSTRAINT dolphn FOREIGN KEY (Townid) REFERENCES Town (id);
ALTER TABLE Town ADD INDEX located_in (Countryid), ADD CONSTRAINT eleFant FOREIGN KEY (Countryid) REFERENCES Country (id);
ALTER TABLE person_address ADD INDEX a (Address_typeid), ADD CONSTRAINT b FOREIGN KEY (Address_typeid) REFERENCES Address_type (id);