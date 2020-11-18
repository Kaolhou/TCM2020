CREATE DATABASE `TCM` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use TCM;
create table denum(
	id int primary key auto_increment,
    pais enum('br', 'en'),
    nome varchar(40),
    idade tinyint,
    genero enum('M', 'F', 'NB', 'PFR') not null,
    oqhouve text not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;