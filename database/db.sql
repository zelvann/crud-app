-- dbname = pweb
-- table = tugas6pweb

CREATE TABLE tugas6pweb(
  nama varchar(255) NOT NULL,
  nrp varchar(20) PRIMARY KEY,
  departemen varchar(255) NOT NULL,
  asal varchar(255) NOT NULL,
  mining_at date NOT NULL
);