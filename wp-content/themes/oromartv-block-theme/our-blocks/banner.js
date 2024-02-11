wp.blocks.registerBlockType("ourblocktheme/banner", {
    title: "Banner",
    edit: EditComponent,
    save: SaveComponent
})

function EditComponent(){
    return (
        <div className="banner">
        <img width="100%" src={{/imagenes/carelia-1200x400.jpeg}} alt="">
        <div className="overlay">
                        <p className="image-text">This is a Banner</p>
                </div>
</div>
    )
}

function SaveComponent(){
    return <p>This is from our Block.</p>
}