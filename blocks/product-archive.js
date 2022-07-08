wp.blocks.registerBlockType( "sivulabra/product-archive", {
  title: "Tuotekategoria sisältö",
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Tuotekategoria sisältö"
    )
  },
  save: function() {
    return null
  }
} )