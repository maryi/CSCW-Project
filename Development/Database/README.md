CREATE TABLE app(id INT auto_increment,
			url VARCHAR(100), 
			creator VARCHAR(50),
			purpose VARCHAR(50),
			pubpriv VARCHAR(50),
			hierarchy VARCHAR(50),
			servt VARCHAR(50),
			sync VARCHAR(50),
			physd VARCHAR(50),
			scale VARCHAR(50),
			community VARCHAR(50),
			nascence VARCHAR(50),
			permanence VARCHAR(50),
			turnover VARCHAR(50),
			compatibility VARCHAR(50),
			PRIMARY KEY (id)
);
/*
ALTER TABLE app
	ADD PRIMARY KEY (id);
*/

ALTER TABLE app AUTO_INCREMENT=0;

INSERT INTO app (url, creator, purpose, pubpriv, hierarchy, servt, sync, physd, scale, community, nascence, permanence, turnover, compatibility)
	VALUES('http://www.skype.com/en/','Microsoft','text, video,
and file sharing','private','all same role','free online account','video - sync 
text, files-async','distributed','text-large video~ 5 people','large','low','medium','low','none');

INSERT INTO app (url, creator, purpose, pubpriv, hierarchy, servt, sync, physd, scale, community, nascence, permanence, turnover, compatibility)
	VALUES('https://slack.com','Slack Technologies','text and
file sharing','both','all same role','freemium','async','distributed','large','large','low','high','low','none');

INSERT INTO app (url, creator, purpose, pubpriv, hierarchy, servt, sync, physd, scale, community, nascence, permanence, turnover, compatibility)
	VALUES('https://github.com','Tom Preston-Werner','code repository','both','2 roles owner and contributor', 'freemium', 'async', 'distributed', 'large', 'medium' ,'medium' ,'high' ,'medium' ,'none');
