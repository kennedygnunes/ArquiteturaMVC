export default function formatar(dado){

    let d = dado.split('=');
    return d[1];

}

export function formataUrl(dado){
    let d = dado.replace('+', ' ');
}