    INSERT INTO produit(nom, prix, quantiteEnStock, description, imagePath,idCategorie) VALUES ("Ampoule A546",4.56,10,"Ampoule faite par cedrick en chine et par de nombreux enfants","img1",(SELECT idCategorie from categorie WHERE categorie='Ampoule')),
    ("Ampoule G678",7.43,4,"Ampoule faite par zakaria en chine et par de nombreux enfants","img2",(SELECT idCategorie from categorie WHERE categorie='Ampoule')),
    ("Fixture Ampoule G678",10.76,65,"Super pour les animaux vennat de chine et pour les ampoule G678","img3",(SELECT idCategorie from categorie WHERE categorie='Douille')),
    ("Swicth PPP",4.98,21,"La switch PPP est super pour allumer des lumière de toute les couleur et de toute provenance","img4",(SELECT idCategorie from categorie WHERE categorie='Interrupteur')),
    ("Plaque de swicth H69",6.56,12,"Vous naurez certainement pas autant de plaisirs a installer cette plaque de swicth que a faire un 69 ;)","img5",(SELECT idCategorie from categorie WHERE categorie='Boite/Jonction')),
    ("Rallonge triple 10ft",50.87,5,"Grace a cette rallonge multiprise vous pourez brancher plusieur appareil","img6",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("Rallonge sans boute",100.14,9,"Cette rallonge a compléter soit même est d'une caliter extrème","img7",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("Rallonge B452-A",1.90,19,"Rallonge pouvant se rouler comme une escargo","img8",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("HG45-TR5",6.52,15,"Plaque de metal pour faire de quoi","img9",(SELECT idCategorie from categorie WHERE categorie='Boite/Jonction')),
    ("FSDS-TR5",2.87,34,"Boite de jonction bin ordinaire","img10",(SELECT idCategorie from categorie WHERE categorie='Boite/Jonction')),
    ("FDS5_TR5",1.76,64,"Une autre plaque de metal pour faire de quoi","img11",(SELECT idCategorie from categorie WHERE categorie='Boite/Jonction')),
    ("Rallonge 30ft",12.56,84,"Longue rallonge qui se roule comme ta mère","img12",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("Prise double",6.73,52,"Une belle prise double pour brancher deux afaire","img13",(SELECT idCategorie from categorie WHERE categorie='Prise')),
    ("Rallonge 5ft",11.84,16,"Rallonge de 5ft pour brancher le vibrateur a ta mère","img14",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("Marette orange",1.94,12,"Criss tu voit bin elle sont orange test cris de marette","img15",(SELECT idCategorie from categorie WHERE categorie='Boite/Jonction')),
    ("Fixture Ampoule G643",3.62,105,"Fixture pour brancher des ampoule de type ampoule","img16",(SELECT idCategorie from categorie WHERE categorie='Douille')),
    ("4 Ampoule F452",9.48,14,"Ampoule faite par un gros criss de sale","img17",(SELECT idCategorie from categorie WHERE categorie='Ampoule')),
    ("Rallonge 3ft",3.56,3,"Une petite rallonge pour de petite chose","img18",(SELECT idCategorie from categorie WHERE categorie='Rallonge')),
    ("Therm-63234",70.79,31,"Thermostat pour thermoster","img19",(SELECT idCategorie from categorie WHERE categorie='Thermostat')),
    ("Therm-52324",4.56,13,"Même afaire que l'autre","img20",(SELECT idCategorie from categorie WHERE categorie='Thermostat'));