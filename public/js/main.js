function validEmail (email) {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (emailRegex.test(email)) {
        return true;
    } else {
        return false;
    }
}

function validationMailForm (title, expediteur, message)
{
    // variable de validation
    var validation = true;
    // const erreurs :
    var titleError = $('#errorTitleMail');
    var emailError = $('#errorAdressMail');
    var messageError = $('#errorContentMail');
    // Titre
    if (title !== '') {
        if (title.length <= 50) {
            titleError.text('');
        } else {    
            titleError.text('Titre trop long, maximum 50 caractères');
            validation = false;
            $("html, body").animate({ scrollTop: 0 }, "fast");
        }
    } else {
        titleError.text('Champ requis');
        validation = false;
        $("html, body").animate({ scrollTop: 0 }, "fast");
    }
    // Mail
    if (validEmail(expediteur)) {
        emailError.text('');
    } else {
        emailError.text('Email invalide !');
        validation = false;
        $("html, body").animate({ scrollTop: 0 }, "fast");
    }
    // Message
    if (message !== '') {
        if (message.length <= 30000) {
            messageError.text('');
        } else {
            messageError.text('Limite de caractères atteinte');
            validation = false;
            $("html, body").animate({ scrollTop: 0 }, "fast");
        }
    } else {
        messageError.text('Champ requis');
        validation = false;
        $("html, body").animate({ scrollTop: 0 }, "fast");
    }
    return validation;
}


$(document).ready(function () {

    // Icones header :
    var profile = $('#IcnProfile');
    var projects = $('#IcnProjects');
    var apparence = $('#siteApparence');

    // liens icones header :
    var lienProfile = $('#lienIcnProfile');
    var lienProjects = $('#lienIcnProjects');

    // Image profil :
    var photoProfil = $('#imgProfil');
    
    // photos créations culinaires (collection) :
    var photosCuisine = $('#ContenuCreation').find('img');

    // Click mode-apparence (header) : 
    // ----------------------------------------------------------------------------------
    // apparence.on('click', function () {
    //     console.log(apparence[0].icon)
    //     if (apparence[0].icon == 'material-symbols:bedtime') {
    //         window.location.href = '/light';
    //     } else if (apparence[0].icon == 'mingcute:light-line') {
    //         window.location.href = '/';
    //     }
    // });
    // Click Profile (header) :
    // ----------------------------------------------------------------------------------
    profile.on('click', function () {
        // Profil cuisinier 
        if (profile[0].icon == 'icon-park-twotone:chef-hat') {
            lienProfile[0].href = '#ProfileCuisine';
        // Profil développeur 
        } else {
            lienProfile[0].href = '#Profile';
        }
    });

    // Click Projects (header) :
    // ----------------------------------------------------------------------------------
    projects.on('click', function () {
        // Profil cuisiner
        if (profile[0].icon == 'icon-park-twotone:chef-hat') {
            lienProjects[0].href = '#Creations';
        // Profil développeur
        } else {
            lienProjects[0].href = '#Projects';
        }
    });

    // Hover sur l'image de profil :
    // ----------------------------------------------------------------------------------   
    $('#imgProfil').on('mouseenter', function () {
        // Si profil cuisine actif :
        if (photoProfil[0].src === 'public/img/my_logo_cuisine.JPG') {
            photoProfil.fadeOut(150, function() {
            photoProfil.attr('src', 'public/img/my_logo_cuisine_real.JPG');
            photoProfil.fadeIn(150);
            });
        } else if (photoProfil[0].src === 'public/img/my_logo.png') {
            photoProfil.fadeOut(150, function() {
            photoProfil.attr('src', 'public/img/my_logo_real.png');
            photoProfil.fadeIn(150);
            });
        }
        $('#imgProfil').on('mouseleave', function () {
            // Si profil developpeur actif :
            if (photoProfil[0].src === 'public/img/my_logo_cuisine_real.JPG') {
                photoProfil.fadeOut(150, function() {
                photoProfil.attr('src', 'public/img/my_logo_cuisine.JPG');
                photoProfil.fadeIn(150);
                }); 
            } else if (photoProfil[0].src === 'public/img/my_logo_real.png') {
                photoProfil.fadeOut(150, function() {
                photoProfil.attr('src', 'public/img/my_logo.png');
                photoProfil.fadeIn(150);
                });
            }
        });
    });

    // Click sur le bouton : Voir mes expérience (cuisine) :
    // ----------------------------------------------------------------------------------
    $('#btnVoirMesExperiences').on('click', function () {
        setTimeout(function () {
            profile[0].icon = 'icon-park-twotone:chef-hat';
            projects[0].icon = 'fluent-emoji-high-contrast:fork-and-knife-with-plate';
            $('#Profile').fadeOut();
            $('#Projects').fadeOut();
            $('#ProfileCuisine').fadeIn();
            $('#Creations').fadeIn();
            $('#titleHome').text("Cuisiner en reconversion");
            photoProfil[0].src = 'public/img/my_logo_cuisine.JPG';
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }, 300);
    });

    // Click sur les images (profil cuisine) :
    // ----------------------------------------------------------------------------------
    photosCuisine.each(function (index, element) {
        $(this).on('click', function () {
            const imgModal = new bootstrap.Modal(
                document.getElementById("modalImgCuisine")
              );
            const modalhtml = $('#modalImgCuisine').find('img');
            modalhtml[0].src = `${this.src}`;
            imgModal.show();

        });
    });

    // Click sur le bouton : Retour au profil développeur :
    // ----------------------------------------------------------------------------------
    $('#btnProfilDeveloppeur').on('click', function () {
        setTimeout(function () {
            profile[0].icon = 'mdi:user-outline';
            projects[0].icon = 'material-symbols:work-outline';
            $('#ProfileCuisine').fadeOut();
            $('#Creations').fadeOut();
            $('#Profile').fadeIn();
            $('#Projects').fadeIn();
            $('#titleHome').text("Développeur Web");
            photoProfil[0].src = 'public/img/my_logo.png';
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }, 300);
    });

    // Click sur le bouton contactez-moi (header) :
    // ----------------------------------------------------------------------------------
    $('#ContactMe').on('click', function () {
        setTimeout(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $('#Contact').fadeIn();
        }, 300);
    });

    // Submit du formulaire Contact :
    // ----------------------------------------------------------------------------------
    $('#FormContact').on('submit', function (e) {
        e.preventDefault();
        var expediteur = $('#adressMail')[0].value;
        var title = $('#titleMail')[0].value;
        var message = $('#contentMail')[0].value;
        // validation :
        if (validationMailForm(title, expediteur, message)) {
            // ajax :
            let url = 'app/php/sendMail';
            let data = {
                expediteur: expediteur,
                titre: title,
                message: message
            }
            $.post(url, {data})
                .done(function (resp) {
                    // effacer les values du form et cache le modèle
                    $('#adressMail')[0].value = '';
                    $('#titleMail')[0].value = '';
                    $('#contentMail')[0].value = '';
                    // afficher l alert de succes
                    $('#Contact').fadeOut();
                    $('#alerts').text('Votre email à bien été envoyé. Je vous répondrai dans les plus bref délais.');
                    $('#alerts').fadeIn();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                })
                .fail(function (err) {
                    console.log(err);
                })

        }

    });

    // Close formulaire contact :
    // ----------------------------------------------------------------------------------
    $('#closeFormContact').on('click', function () {
        $('#Contact').fadeOut();
    });

});