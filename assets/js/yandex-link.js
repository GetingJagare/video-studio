document.addEventListener('DOMContentLoaded', () => {

    const url = 'https://cloud-api.yandex.net/v1/disk/public/resources';
    const ydLinks = document.querySelectorAll('[data-yd-link]');

    let forms = [];
    let pageOverlay;

    const getYandexLink = async (linkElement, public_link, linkIndex) => {

        const response = await fetch(`${url}?public_key=${public_link}`);

        const json = await response.json();

        if (linkIndex === ydLinks.length - 1) {
            setTimeout(() => {
                pageOverlay.style.display = 'none';
            }, 600);
        }

        return json;
    };

    const createPageOverlay = () => {

        pageOverlay = document.createElement('div');

        pageOverlay.classList.add('page-overlay');

        document.head.innerHTML += '<style>' +
            '.page-overlay { position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index: 9999; ' +
            ' background-color: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: center; color: #fff;}' +
            '</style>';

        pageOverlay.innerHTML = '<div><div style="width: 100%; margin-bottom: 20px; text-align: center; font-size: 22px; font-family: \'SFNSText\', sans-serif;">' +
            'Подготавливаем ссылки...</div>' +
            '<div style="text-align: center"><img src="/assets/img/icons/preloader.svg"/></div></div>';

        document.body.appendChild(pageOverlay);

    };

    const createDownloadForm = (data) => {

        const form = document.createElement('form');

        form.style.display = 'none';
        form.method = 'POST';

        form.innerHTML = `<input type="hidden" name="link" value="${data.file}" />` +
            `<input type="hidden" name="filename" value="${data.name}" />` +
            `<input type="hidden" name="mimetype" value="${data.mime_type}" />` +
            '<input type="submit" value="Download" />';

        document.body.appendChild(form);

        forms.push(form);

    };

    if (ydLinks.length) {

        createPageOverlay();

        ydLinks.forEach(async (link, i) => {

            if (link.dataset.ydLink) {

                const response = await getYandexLink(link, link.dataset.ydLink, i);

                createDownloadForm(response);

                link.addEventListener('click', (event) => {

                    event.preventDefault();

                    forms[i].submit();

                });

            }

        });

    }

});
