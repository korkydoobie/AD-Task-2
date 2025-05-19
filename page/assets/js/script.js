document.addEventListener('DOMContentLoaded', function(){
    const cards = document.querySelectorAll('.card');
    const dayDisplay = document.getElementById('selected-day');
    const tasksDisplay = document.getElementById('selected-tasks');

    cards.forEach(card =>{
        card.addEventListener('click', function(){
            const day = this.querySelector('h2').textContent;
            const tasks = Array.from(this.querySelectorAll('li')).map(li=>li.textContent);

            dayDisplay.textContent = day;
            tasksDisplay.innerHTML = ' ';

            tasks.forEach(task =>{
                const li = document.createElement('li');
                li.textContent = task;
                tasksDisplay.append(li);
            })
            document.querySelectorAll('.card').forEach(c =>{
                c.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});