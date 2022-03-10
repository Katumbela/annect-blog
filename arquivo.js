
    setInterval(function(){
        let novaHora= new Date();
        let hora= novaHora.getHours();
        let minutos= novaHora.getMinutes();
        let segundo = novaHora.getSeconds();

        minutos= zero (minutos);
        segundo = zero(segundo);

        document.getElementById('timer').textContent = hora + ":" + minutos + ":" + segundo;
    }, 1000)

    function zero (x){
        if (x<10){
            x = '0' + x;
        } return x;
    }

    function disp(){
        alert('Muito Obrigado pelo interesse em disponibilizar um curso agradeceríamos imenso se mandasse para o nosso email, Obrigado');
    }

    function curso(){
        alert('Olá amigo/a, os cursos ainda não estão disponíveis, estarão disponíveis muito em breve. obrigado!')
    }