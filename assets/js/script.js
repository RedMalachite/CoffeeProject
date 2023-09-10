const notifyEl = document.getElementById('notify')
if (notifyEl) {
    setTimeout(() => {
            console.log('timeout');
            notifyEl.remove()
        },
        5000
    )
}
