import { InnerBlocks, RichText, BlockControls, __experimentalLinkControl as LinkControl } from "@wordpress/block-editor"
import { ToolbarGroup, ToolbarButton, Popover, Button } from "@wordpress/components"
import { link } from "@wordpress/icons"
import { useState } from "@wordpress/element"

wp.blocks.registerBlockType( "sivulabra/button", {
  title: "Sivulabra Linkkipainike",
  category: 'sivulabra',
  attributes: {
    text: {
      type: "string",
      default: "Linkkiteksti"
    },
    size: {
      type: "string",
      default: ""
    },
    linkObject: {
      type: "object",
      default: {
        url: ""
      }
    }
  },
  edit: EditComponent,
  save: SaveComponent
} )

function EditComponent(props) {
  const [ isLinkPickerVisible, setIsLinkPickerVisible ] = useState(false)

  const handleTextChange = (newText) => {
    props.setAttributes({ text: newText })
  }

  const handleLinkChange = (newLink) => {
    props.setAttributes({ linkObject: newLink })
  }

  const buttonHandler = () => {
    setIsLinkPickerVisible(prev => !prev)
  }

  return (
    <>
      <BlockControls>

        <ToolbarGroup>
          <ToolbarButton
            onClick={buttonHandler}
            icon={link}
          />
        </ToolbarGroup>

        <ToolbarGroup>
          <ToolbarButton isPressed={props.attributes.size === "sm"} onClick={() => props.setAttributes({ size: "sm" })}>
            Pieni
          </ToolbarButton>
          <ToolbarButton isPressed={props.attributes.size === "md"} onClick={() => props.setAttributes({ size: "md" })}>
            Medium
          </ToolbarButton>
          <ToolbarButton isPressed={props.attributes.size === "lg"} onClick={() => props.setAttributes({ size: "lg" })}>
            Iso
          </ToolbarButton>
        </ToolbarGroup>

      </BlockControls>
      <RichText
        tagName="a"
        value={props.attributes.text}
        className={`btn btn--${props.attributes.size}`}
        onChange={handleTextChange}
        allowedFormats={[]}
      />
      {isLinkPickerVisible && (
        <Popover position="middle center">
          <LinkControl
            settings={[]}
            value={props.attributes.linkObject}
            onChange={handleLinkChange}
          />
          <Button variant="primary" onClick={() => setIsLinkPickerVisible(false)} style={{ display: "block", width: "100%" }}>
            Tallenna
          </Button>
        </Popover>
      )}
    </>
  )
}

function SaveComponent() {
  return <InnerBlocks.Content />
}