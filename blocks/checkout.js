wp.blocks.registerBlockType( "sivulabra/checkout", {
  title: "Kassan sisältö",
  category: 'sivulabra',
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