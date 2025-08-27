const form = document.querySelector('.all-filters form');

if (form) {
  const filtros = document.querySelectorAll('.filtro');
  const allItems = $('#itens li').toArray(); // todos os <li> originais
  let status = 'all';
  let cidade = '';
  let tipo = '';

  // previne reload
  form.addEventListener('submit', (e) => e.preventDefault());

  // eventos
  filtros.forEach((filtro) => {
    if (filtro.tagName === 'BUTTON') {
      filtro.addEventListener('click', (e) => {
        e.preventDefault();
        document
          .querySelectorAll('.all-filters button')
          .forEach((btn) => btn.classList.remove('ativo'));
        filtro.classList.add('ativo');
        status = filtro.dataset.filter;
        atualizarPaginacao();
      });
    }

    if (filtro.tagName === 'SELECT') {
      filtro.addEventListener('change', (e) => {
        if (filtro.dataset.filter === 'cidade') cidade = e.target.value;
        if (filtro.dataset.filter === 'tipo') tipo = e.target.value;
        atualizarPaginacao();
      });
    }
  });

  // função que aplica os filtros e reinicia paginação
  function atualizarPaginacao() {
    // aplica filtros nos itens originais
    const filtrados = allItems.filter((li) => {
      const item = li.querySelector('.item');
      let match = true;
      if (status !== 'all' && item.dataset.status !== status) match = false;
      if (cidade && item.dataset.cidade !== cidade) match = false;
      if (tipo && item.dataset.tipo !== tipo) match = false;
      return match;
    });

    // reinicializa paginação
    $('#pagination-container').pagination({
      dataSource: filtrados,
      pageSize: 12,
      showPageNumbers: true,
      callback: function (data, pagination) {
        const $ul = $('#itens');
        $ul.empty().append(data);

        // anima cada <li>
        $ul.find('li').each(function (i, el) {
          $(el).addClass('fadeLeft');
          setTimeout(() => {
            $(el).removeClass('fadeLeft');
          }, 600);
        });
      },
    });
  }

  // inicia com todos
  atualizarPaginacao();
}
