

CREATE TABLE tbl_ratin (
  id int(11) NOT NULL,
  user_id int(11) NOT NULL DEFAULT '1',
  restaurant_id int(11) NOT NULL,
  rating int(2) NOT NULL,
  timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE tbl_restaurant (
  id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  address varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-

INSERT INTO tbl_restaurant (id,name,address) VALUES
(1, 'jothika','thoothukudi');




ALTER TABLE tbl_rating
  ADD PRIMARY KEY ('id');


ALTER TABLE tbl_restaurant
  ADD PRIMARY KEY ('id');




ALTER TABLE tbl_rating
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE tbl_restaurant
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
