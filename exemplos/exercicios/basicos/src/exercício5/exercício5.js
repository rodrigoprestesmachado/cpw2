/**
 * CPW2 by Rodrigo Prestes Machado
 *
 * CPW2 is licensed under a
 * Creative Commons Attribution 4.0 International License.
 * You should have received a copy of the license along with this
 * work. If not, see <http://creativecommons.org/licenses/by/4.0/>.
 */

/**
 * Exercício 5:
 *
 * Crie uma página HTML com um botão e um contador de cliques. No JavaScript
 * associado à página, adicione um evento ao botão para incrementar o contador
 * de cliques em 1 cada vez que o botão for clicado, e atualize o valor do
 * contador na página. Além disso, utilize um estilo CSS para estilizar o botão
 * e o contador, tornando a interface mais amigável e visualmente atraente.
 */
let count = 0;

function addClick() {
    count++;
    document.getElementById('clicks').innerHTML = count;
}
