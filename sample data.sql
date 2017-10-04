insert customer values('1', 'Kiwook', 'Kwon');
insert customer values('2', 'Eric', 'Asch');
insert customer values('3', 'Timothy', 'Hayduk');
insert customer values('4', 'Kushal', 'Tiwari');

insert products values('11', 'CD');
insert products values('12', 'DVD');
insert products values('13', 'DigitalDownload');

insert CDTitles values('11', '24k Magic', 'Bruno Mars', '20');
insert DVDTitles values('12', 'IT', 'Andres Muschietti', '90');
insert DigitalDownload values('13', 'Dinkirk', 'Christopher Nolan', '120');

insert orders values('25', '1', '11', NOW(), '20', 'Debit');
insert orders values('22', '2', '12', NOW(), '90', 'Debit');
insert orders values('23', '3', '13', NOW(), '120', 'Credit');
insert orders values('24', '4', '11', NOW(), '220', 'Credit');