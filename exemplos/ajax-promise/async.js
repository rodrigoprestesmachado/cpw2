export async function promiseExample(value){
// 1 - Criando a promise
return new Promise(function (resolve, reject) {
    if (value) {
    // 2 - usando resolve no caso de sucesso
    resolve("value true");
    } else {
    // 3 - usando reject no caso de erro
    reject(Error("value false!"));
    }
});
}