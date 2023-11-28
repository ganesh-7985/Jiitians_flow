// Simulated data for subjects of each semester
const semesterSubjects = {
    1: [
      { name: 'English', link: 'https://drive.google.com/drive/folders/1o55SaOQDhVyDzNwliKzYclDu_KXXHeTJ' },
      { name: 'physics', link: 'https://drive.google.com/drive/folders/1gdbwL8b93rhVBYkWnGMXzXbmhBf5XxtR' },
      { name: 'SDF', link: 'https://drive.google.com/drive/folders/1rqY5N977_Eaa0LCfs_RGARklmD67-CWq' }
    ],
    2: [
      { name: 'Electrical science', link: 'https://drive.google.com/drive/folders/1-Zeef5Ucm26o3mmFVJj-hJQcWUUHqhNi' },
      { name: 'Physics', link: ' https://drive.google.com/drive/folders/1lP7aYdzHNaHNv2hWVhpaETu-OxbAXflh' },
      { name: 'SDF', link: ' https://drive.google.com/drive/folders/1U4IEjQrj-v4WCvvw1W6GzWULiO66I16K' },
      { name: 'Maths', link: ' https://drive.google.com/drive/folders/1QVWVCjzwdR7h8rJd1VUFth9EYuepXvFn' },
      
    ],
    3:[
      {name: 'Electrical science' ,link : 'https://drive.google.com/drive/folders/1W3kKV6pCYuSgEHhIlUgrZukZhW0Mbne3'},
      {name: 'data structures' ,link : 'https://drive.google.com/drive/folders/1etHWFx1P8oPOMIP9HZmJZ1l01E693aNM'},
      {name: 'database and web' ,link : 'https://drive.google.com/drive/folders/12DX8UnN4N60SdKzWShwMXIzGZ4nCnK9d'},
      {name: 'Economics' ,link : 'https://drive.google.com/drive/folders/1GfuAIWbCJn-3G2m9jgIXc-hdYVZrhWx5'},
      {name: 'TFCS' , link:'https://drive.google.com/drive/folders/1_lfSk4Zgxpi8AHO04N6gjSYVkxvUaYra'}
    ],
    4:[

    ],
    5:[

    ],
    6:[
      
    ]
  };
  
  function showSubjects(semester) {
    const subjectsList = document.getElementById('subjectsList');
    const subjects = semesterSubjects[semester];
  
    if (subjects) {
      let subjectsHTML = '<h2>Subjects for Semester ' + semester + ':</h2>';
      subjects.forEach(subject => {
        subjectsHTML += `<a href="${subject.link}" class="subject-link">${subject.name}</a>`;
      });
  
      subjectsList.innerHTML = subjectsHTML;
      subjectsList.style.display = 'block';
    } else {
      subjectsList.innerHTML = '<p>No subjects found for this semester.</p>';
      subjectsList.style.display = 'block';
    }
  }
  