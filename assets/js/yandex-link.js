document.addEventListener('DOMContentLoaded', () => {

    const url = 'https://cloud-api.yandex.net/v1/disk/public/resources';
    const ydLinks = document.querySelectorAll('[data-yd-link]');

    let forms = [];

    const getYandexLink = async (linkElement, public_link) => {

        const response = await fetch(`${url}?public_key=${public_link}`);

        return response.json();
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

    ydLinks.forEach(async (link, i) => {

        if (link.dataset.ydLink) {

            const response = await getYandexLink(link, link.dataset.ydLink);

            createDownloadForm(response);

            link.addEventListener('click', (event) => {

                event.preventDefault();

                forms[i].submit();

            });

        }

    });

});
