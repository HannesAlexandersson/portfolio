let socialContainer = document.querySelector('.social-wrapper');

    let linkedin = document.createElement('div');
    linkedin.classList.add('linked');
    let linkImg = document.createElement('img');
    linkImg.src = '/src/Assets/social-media/linkedin.svg';
    linkImg.classList.add('linkedImg');
    let linkedA = document.createElement('a');
    linkedA.href = 'https://github.com/HannesAlexandersson/';
    linkedA.appendChild(linkImg)
    linkedin.appendChild(linkedA);
    
    let x = document.createElement('div');
    x.classList.add('x');
    let xImg = document.createElement('img');
    xImg.src = '/src/Assets/social-media/x.svg';
    xImg.classList.add('xImg');
    let xA = document.createElement('a');
    xA.href = 'https://twitter.com/Sanphlet';
    xA.appendChild(xImg);
    x.appendChild(xA);

    let insta = document.createElement('div');
    insta.classList.add('insta');
    let instaImg = document.createElement('img');
    instaImg.src = '/src/Assets/social-media/instagram.svg';
    instaImg.classList.add('instaImg');
    let instaA = document.createElement('a');
    instaA.href = 'https://www.instagram.com/borttappad/';
    instaA.appendChild(instaImg);
    insta.appendChild(instaA);

    let gh = document.createElement('div');
    gh.classList.add('gh');
    let ghImg = document.createElement('img');
    ghImg.src = '/src/Assets/social-media/github-light.svg';
    ghImg.classList.add('ghImg');
    let ghA = document.createElement('a');
    ghA.href = 'https://github.com/HannesAlexandersson';
    ghA.appendChild(ghImg);
    gh.appendChild(ghA);

    socialContainer.appendChild(gh);
    socialContainer.appendChild(x);
    socialContainer.appendChild(linkedin);
    socialContainer.appendChild(insta);