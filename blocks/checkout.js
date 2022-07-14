wp.blocks.registerBlockType( "sivulabra/checkout", {
  title: "Kassan sisältö",
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Kassan sisältö"
    )
  },
  save: function() {
    return null;
  }
} )