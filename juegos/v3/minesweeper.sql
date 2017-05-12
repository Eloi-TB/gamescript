drop table minesweeper;

create table minesweeper(
	template varchar(10),
	nom varchar(20),
	victoria smallint,
	temps mediumint,
	mytimestamp timestamp
);

CREATE USER alumne IDENTIFIED BY 'keiL2lai';
GRANT ALL ON jbalmes.minesweeper TO alumne@localhost identified by "keiL2lai";
flush privileges;

--insert into minesweeper values ('8x8', 'Joan', 1, 20, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 1, 18, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 1, 16, '2017-01-31');
--insert into minesweeper values ('8x8', 'Pere', 1, 14, '2017-01-31');
--insert into minesweeper values ('8x8', 'Pere', 1, 12, '2017-01-31');
--insert into minesweeper values ('8x8', 'Pere', 1, 10, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 1, 8, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 1, 6, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 1, 4, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 0, 20, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 0, 18, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 0, 16, '2017-01-31');
--insert into minesweeper values ('8x8', 'Joan', 0, 14, '2017-01-31');
--insert into minesweeper values ('8x8', 'Pere', 0, 12, '2017-01-31');
--insert into minesweeper values ('8x8', 'Pere', 0, 10, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 0, 8, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 0, 6, '2017-01-31');
--insert into minesweeper values ('8x8', 'Maria', 0, 4, '2017-01-31');

--HALL OF FAME (mínim temps)
--select nom, min(temps) from minesweeper where template='8x8' and victoria=1 group by nom order by min(temps);

--HALL OF FAME (millor estadística)


