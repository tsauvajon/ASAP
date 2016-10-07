	/* Cours avec tuteur */
	Delimiter |
	Drop Procedure If Exists CoursAvecTuteurs|
	Delimiter |
	Create Procedure CoursAvecTuteurs()
	Begin
		Select *
		From cours
		Where cours.id_cours In (Select distinct id_cours From etre_prof);
	End|
	Delimiter ;
	Delimiter |
	/* Cours sans tuteur */
	Drop Procedure If Exists CoursSansTuteur|
	Delimiter |
	Create Procedure CoursSansTuteur()
	Begin
	Select *
	From cours
	Where cours.id_cours Not In (Select distinct id_cours From etre_prof);
	End|
	Delimiter ;
	Delimiter |
	/* tous les eleves inscrits à un cours */
	Drop Procedure If Exists ElevesDansCours|
	Delimiter |
	Create Procedure ElevesDansCours(In p_idcours Int)
	Begin
	Select *
	From utilisateur
	Where id_util In (Select distinct id_util From etre_eleve Where id_cours = p_idcours);
	End|
	Delimiter ;
	Delimiter |
	/* tous les tuteurs inscrits à un cours */
	Drop Procedure If Exists TuteursDansCours|
	Delimiter |
	Create Procedure TuteursDansCours(In p_idcours Int)
	Begin
	Select *
	From utilisateur
	Where id_util In (Select distinct id_util From etre_prof Where id_cours = p_idcours);
	End|
	Delimiter ;
	Delimiter |
	/* se connecter (si la requete retourne 1 resultat, connecter, sinon login ou mdp invalide) */
	Drop Procedure If Exists Connecter|
	Delimiter |
	Create Procedure Connecter(In p_login Varchar(255), In p_mdp Varchar(255))
	Begin
		Select *
		From utilisateur
		Where login = p_login
		And mdp = p_mdp;
	End|
	Delimiter ;
	Delimiter |
	/* creer un cours */
	Drop Procedure If Exists CreerCours|
	Delimiter |
	Create Procedure CreerCours (In p_debut DateTime, In p_fin DateTime, In p_intitule Varchar(255), In p_description Text)
	Begin
	Insert Into cours (`id_cours`, `horaire_debut`, `horaire_fin`, `intitule`, `description`)
	Values (NULL, p_debut, p_fin, p_intitule, p_description);
	End|
	Delimiter ;
	Delimiter |
	/* editer un cours */
	Drop Procedure If Exists EditerCours|
	Delimiter |
	Create Procedure EditerCours (In p_idcours Int, In p_debut DateTime, In p_fin DateTime, In p_intitule Varchar(255), In p_description Text)
	Begin
	Update cours 
	Set horaire_debut = p_debut, horaire_fin = p_fin, intitule = p_intitule, description = p_description
	Where id_cours = p_idcours;
	End|
	Delimiter ;
	Delimiter |
	/* s'inscrire a un cours en tant qu'eleve */
	Drop Procedure If Exists InscrireCoursEleve|
	Delimiter |
	Create Procedure InscrireCoursEleve(In p_idcours Int, In p_idutil Int)
	Begin
	Insert Into etre_eleve (id_cours, id_util)
	Values (p_idcours, p_idutil);
	End|
	Delimiter ;
	Delimiter |
	/* s'inscrire a un cours en tant que tuteur */
	Drop Procedure If Exists InscrireCoursTuteur|
	Delimiter |
	Create Procedure InscrireCoursTuteur(In p_idcours Int, In p_idutil Int)
	Begin
	Insert Into etre_prof (id_cours, id_util)
	Values (p_idcours, p_idutil);
	End|
	Delimiter |
	Drop Procedure If Exists GetCours|
	Create Procedure GetCours(In p_idcours Int)
	Begin
		Select *
		From cours
		Where id_cours = p_idcours;
	End|
	Delimiter |
	Drop Procedure If Exists GetUtilisateur|
	Create Procedure GetUtilisateur(In p_idutil Int)
	Begin
		Select *
		From utilisateur
		Where id_util = p_idutil;
	End|
	Delimiter ;
	Delimiter |
	/* editer un cours */
	Drop Procedure If Exists EditerProfil|
	Delimiter |
	Create Procedure EditerProfil (In p_idutil Int, In p_debut DateTime, In p_fin DateTime, In p_intitule Varchar(255))
	Begin
	Update cours 
	Set horaire_debut = p_debut, horaire_fin = p_fin, intitule = p_intitule, description = p_description
	Where id_cours = p_idcours;
	End|
	Delimiter ;