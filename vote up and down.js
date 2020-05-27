//voting up and down script
for (let i = 0; i <= document.querySelectorAll('.votingSpace').length; i++) {
    addEvent(i, document.querySelectorAll('.votingSpace')[i].children[1].textContent);
}

function addEvent(i, defaultValue) {
    document.querySelectorAll('.votingSpace')[i].addEventListener('click', function () {
        var js = document
            .querySelectorAll('.votingSpace')[i]
            .children[1]
            .textContent;
        js = Number(js);
        if (document.querySelectorAll('.votingSpace')[i].classList.contains('votedown')) {
            stat = 0;
        }
        var dataString = 'vote=' + js + '&text=' + document.querySelectorAll('p#prepositionText')[i].textContent; /* + "&stat=" + stat*/
        $.ajax({
            type: 'POST',
            url: 'test.php',
            data: dataString,
            cache: false,
            success: function (html) {
                if (html != "you already voted") {
                    js++;
                    document.querySelectorAll('.votingSpace')[i].children[1].textContent = js;
                } else
                if (html === "you already voted") {
                    js = defaultValue;
                    document.querySelectorAll('.votingSpace')[i].children[1].textContent = defaultValue;
                }
            }
        });
    });
}