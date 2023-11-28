// Simulating React components behavior
const users = [
    { _id: 4, name: 'vishal' },
    { _id: 1, name: 'Ganesh' },
    { _id: 2, name: 'siddanth' },
    { _id: 3, name: 'pavan' },
    { _id: 5, name: 'shanmukh' },
    { _id: 6, name: 'veer' },
    { _id: 7, name: 'satya' },
    { _id: 8, name: 'shankar' },
    { _id: 9, name: 'Gautam' },
    { _id: 11, name: 'reddy' },
    { _id: 10, name: 'manu' },
  
];

document.addEventListener('DOMContentLoaded', () => {
    const userListContainer = document.querySelector('.user-list-container');

    users.forEach(user => {
        const userLink = document.createElement('a');
        userLink.href = `/Users/${user._id}`;
        userLink.className = 'user-profile-link';

        const h3 = document.createElement('h3');
        h3.textContent = user.name.charAt(0).toUpperCase();

        const h5 = document.createElement('h5');
        h5.textContent = user.name;

        userLink.appendChild(h3);
        userLink.appendChild(h5);
        userListContainer.appendChild(userLink);
    });
});
