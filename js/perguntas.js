
    document.querySelectorAll('.faq-list details').forEach(details => {

        const summary = details.querySelector('summary');
        const resposta = details.querySelector('.faq-resposta');

        summary.addEventListener('click', function (event) {

            event.preventDefault();

            if (details.open) {

                // Fecha
                resposta.style.gridTemplateRows = '0fr';

                setTimeout(() => {
                    details.open = false;
                }, 350);

            } else {

                // Abre
                details.open = true;

                requestAnimationFrame(() => {
                    resposta.style.gridTemplateRows = '1fr';
                });

            }

        });

    });

